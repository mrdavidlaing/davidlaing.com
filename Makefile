# Hugo site build and deployment
# Cross-platform Makefile (requires: make, curl, gh CLI)
.PHONY: build serve clean fetch-resume publish-gist dev help

GIST_ID = c88b3618a13d662c6007c658646ed2f0
GIST_URL = https://gist.githubusercontent.com/mrdavidlaing/$(GIST_ID)/raw/resume.json
RESUME_FILE = static/resume.json

# Default target
all: build

# Development workflow (no external dependencies)
dev:
	hugo server -D --bind 0.0.0.0

# Fetch latest resume from GitHub Gist using curl
fetch-resume:
	@echo "📥 Fetching latest resume.json from GitHub Gist..."
	curl -f -s -o $(RESUME_FILE) $(GIST_URL) && echo "✅ Successfully updated resume.json" || (echo "❌ Failed to fetch resume.json" && exit 1)

# Publish local resume.json to GitHub Gist using gh CLI
publish-gist:
	@echo "🚀 Publishing resume.json to GitHub Gist..."
	@test -f $(RESUME_FILE) || (echo "❌ File not found: $(RESUME_FILE)" && exit 1)
	gh gist edit $(GIST_ID) $(RESUME_FILE) --filename resume.json && echo "✅ Successfully published resume.json to Gist!" || (echo "❌ Failed to publish to Gist" && exit 1)

# Build the site
build:
	hugo --minify

# Serve development server
serve:
	hugo server -D --bind 0.0.0.0

# Clean build artifacts
clean:
	rm -rf public/

# Show help
help:
	@echo "Cross-platform Hugo site commands:"
	@echo ""
	@echo "Development:"
	@echo "  dev          - Start development server (no external deps)"
	@echo "  serve        - Start development server"
	@echo "  build        - Build the site"
	@echo "  clean        - Remove build artifacts"
	@echo ""
	@echo "Resume management:"
	@echo "  fetch-resume - Fetch latest resume.json from GitHub Gist"
	@echo "  publish-gist - Publish local resume.json to GitHub Gist"
	@echo ""
	@echo "Requirements: make, curl, gh CLI"