# Deploying to Render - Step by Step Guide

## Prerequisites
1. A GitHub account
2. Your code pushed to a GitHub repository
3. A Render account (sign up at https://render.com - it's free!)

## Step 1: Prepare Your Code

### 1.1 Make sure your code is committed and pushed to GitHub

```bash
# If you haven't initialized git yet:
git init
git add .
git commit -m "Initial commit - portfolio site ready for deployment"

# Create a repository on GitHub, then:
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
git branch -M main
git push -u origin main
```

### 1.2 Important: Make sure these are in your `.gitignore`:
- `.env` (should already be there)
- `vendor/` (should already be there)
- `node_modules/` (should already be there)
- `storage/logs/*` (should already be there)

## Step 2: Create a Render Account

1. Go to https://render.com
2. Sign up with your GitHub account (recommended for easy repo connection)
3. Verify your email if prompted

## Step 3: Create a New Web Service

1. In your Render dashboard, click **"New +"** button
2. Select **"Web Service"**
3. Connect your GitHub account if you haven't already
4. Select your repository (`portfolio-site`)

## Step 4: Configure Your Service

### Basic Settings:
- **Name**: `portfolio-site` (or whatever you prefer)
- **Region**: Choose closest to you (e.g., `Oregon (US West)`)
- **Branch**: `main` (or your default branch)
- **Root Directory**: Leave empty (or `./` if needed)

### Build & Deploy Settings:

**Build Command:**
```bash
composer install --no-dev --optimize-autoloader && npm install && npm run build
```

**Start Command:**
```bash
php artisan serve --host=0.0.0.0 --port=$PORT
```

### Environment Variables:

Click **"Advanced"** and add these environment variables:

| Key | Value |
|-----|-------|
| `APP_NAME` | `Portfolio Site` |
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `APP_KEY` | *(Leave empty - Render will generate this)* |
| `APP_URL` | *(Leave empty - Render will set this automatically)* |
| `LOG_CHANNEL` | `stderr` |
| `LOG_LEVEL` | `error` |
| `SESSION_DRIVER` | `file` |
| `CACHE_STORE` | `file` |
| `QUEUE_CONNECTION` | `sync` |

**Important Notes:**
- `APP_KEY`: After first deployment, Render will generate this. You can also generate it locally with `php artisan key:generate` and copy the value.
- `APP_URL`: Render will automatically set this to your service URL (e.g., `https://portfolio-site.onrender.com`)

## Step 5: Deploy

1. Click **"Create Web Service"**
2. Render will start building your application
3. The first deployment may take 5-10 minutes
4. Watch the build logs - you should see:
   - Composer installing dependencies
   - npm installing packages
   - Vite building assets
   - Application starting

## Step 6: After Deployment

### 6.1 Get Your APP_KEY (if not auto-generated)

If Render didn't generate `APP_KEY` automatically:

1. Go to your service dashboard
2. Click **"Environment"** tab
3. Click **"Add Environment Variable"**
4. Key: `APP_KEY`
5. Value: Generate locally with `php artisan key:generate` and copy the value, OR use Render's shell:
   ```bash
   # In Render's shell (if available):
   php artisan key:generate --show
   ```

### 6.2 Verify Your Site

1. Once deployed, you'll get a URL like: `https://portfolio-site.onrender.com`
2. Visit the URL to see your site
3. Test all pages: `/`, `/about`, `/projects`, `/contact`
4. Test resume download: `/resume/download`

## Step 7: (Optional) Custom Domain

If you want to use your own domain:

1. Go to your service settings
2. Click **"Custom Domains"**
3. Add your domain
4. Follow Render's DNS instructions

## Troubleshooting

### Build Fails
- Check build logs for errors
- Make sure `composer.json` and `package.json` are correct
- Verify PHP version (Render supports PHP 8.2+)

### Site Shows 500 Error
- Check logs in Render dashboard
- Verify `APP_KEY` is set
- Check that `storage/` directory is writable (Render handles this automatically)

### Assets Not Loading
- Make sure `npm run build` completed successfully
- Check that `public/build/` directory exists
- Verify Vite manifest is generated

### First Request is Slow
- This is normal! Render's free tier spins down after 15 minutes of inactivity
- The first request after spin-down takes ~30 seconds to wake up
- Consider upgrading to paid tier if this is an issue

## Using render.yaml (Alternative Method)

If you prefer, you can use the `render.yaml` file included in this project:

1. In Render dashboard, when creating a new service
2. Select **"Apply render.yaml"** option
3. Render will read the configuration from the file
4. You'll still need to set `APP_KEY` manually after first deploy

## Free Tier Limitations

- **750 hours/month** (usually enough for a portfolio site)
- **Spins down after 15 minutes** of inactivity
- **First request after spin-down** takes ~30 seconds
- **512 MB RAM**
- **Free SSL certificate** included

## Next Steps

- Set up automatic deployments (enabled by default)
- Monitor your site in the Render dashboard
- Check logs if issues arise
- Consider upgrading if you need more resources

---

**Need Help?**
- Render Docs: https://render.com/docs
- Laravel on Render: https://render.com/docs/deploy-laravel

