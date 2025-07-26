# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a personal website built with Hugo static site generator using the Congo theme v2.6.1. The site is configured as a profile-style homepage with dark theme by default.

## Prerequisites

- Hugo (static site generator)
- Go 1.20+ (required by Hugo modules)

## Development Commands

### Local Development
```bash
hugo server -D
```
Starts development server with drafts enabled, typically on http://localhost:1313

### Building for Production
```bash
hugo
```
Generates static files in the `public/` directory

### Creating New Content
```bash
hugo new content/posts/new-post.md
```
Creates new content using the archetype template

## Site Configuration

The site uses Hugo's modular configuration approach with files split across `config/_default/`:

- **config.toml**: Base site configuration (baseURL, language, outputs)
- **params.toml**: Congo theme parameters (layout, colors, features)
- **menus.en.toml**: Navigation menu structure
- **languages.en.toml**: Language-specific settings
- **module.toml**: Hugo module imports (Congo theme)
- **markup.toml**: Markdown rendering configuration

## Content Structure

- **content/_index.md**: Homepage content (profile layout)
- **archetypes/default.md**: Template for new content with frontmatter

## Theme Configuration

The site uses Congo theme with these key settings:
- Profile homepage layout
- Ocean color scheme with dark default appearance
- Auto appearance switching enabled
- Search and code copy disabled
- Image lazy loading enabled

## Module Management

The site uses Hugo modules instead of git submodules for theme management. The Congo theme is imported via `module.toml` and managed through `go.mod`.

To update the theme:
```bash
hugo mod get -u github.com/jpanther/congo/v2
hugo mod tidy
```

## Assets

Static assets are stored in:
- **assets/images/**: Site images and media files