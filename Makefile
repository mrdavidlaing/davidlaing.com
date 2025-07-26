# Hugo site build and deployment
.PHONY: build serve clean help

# Default target
all: build

# Build the site and create cv.yaml copy
build:
	hugo --minify
	cp public/resume.yaml public/cv.yaml

# Serve development server
serve:
	hugo server -D --bind 0.0.0.0

# Clean build artifacts
clean:
	rm -rf public/

# Show help
help:
	@echo "Available targets:"
	@echo "  build  - Build the site and create cv.yaml copy"
	@echo "  serve  - Start development server"
	@echo "  clean  - Remove build artifacts"
	@echo "  help   - Show this help"