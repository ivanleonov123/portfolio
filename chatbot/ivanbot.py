import sqlite3
import json
import subprocess

DB_PATH = "products.db"

def get_products():
    conn = sqlite3.connect(DB_PATH)
    cursor = conn.cursor()
    cursor.execute("SELECT name, category, price, stock, description FROM products")
    rows = cursor.fetchall()
    conn.close()
    return rows

def find_related_products(user_input):
    # Very basic filter — later you can replace with semantic search
    conn = sqlite3.connect(DB_PATH)
    cursor = conn.cursor()
    cursor.execute("SELECT name, category, price, stock, description FROM products")
    rows = cursor.fetchall()
    results = []
    for name, category, price, stock, desc in rows:
        if any(word.lower() in name.lower() or word.lower() in category.lower() for word in user_input.split()):
            results.append(f"{name}: ${price}, stock {stock}, {desc}")
    conn.close()
    return results

def query_llm(prompt):
    """Calls the local Ollama model."""
    result = subprocess.run(
        ["ollama", "run", "llama3"],
        input=prompt,
        capture_output=True,
        text=True
    )
    return result.stdout.strip()

def respond(user_input):
    related = find_related_products(user_input)
    if related:
        product_info = "\n".join(related)
    else:
        product_info = "No relevant product data found in the local database."

    system_prompt = f"""
You are a helpful local assistant for an e-commerce site.
You have access to the following product data:

{product_info}

User question: {user_input}

Answer conversationally, using the database info when possible.
If unsure, say you don’t have that information.
"""

    reply = query_llm(system_prompt)
    return reply

if __name__ == "__main__":
    print("🧠 Local Product Chatbot (powered by Llama3 via Ollama)")
    while True:
        user_input = input("\nYou: ")
        if user_input.lower() in ["quit", "exit"]:
            break
        print(f"Bot: {respond(user_input)}")
