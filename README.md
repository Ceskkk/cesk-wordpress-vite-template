# Cesk Wordpress Vite Template

## Features

- Vite as builder
- Sass
- Linter for js and css
- Custom menus
- Remove comments
- Remove editor from pages

## How to use it

- Change project name on style.css and package.json
- Upload your fonts on assets -> fonts and set font-family on assets -> scss -> \_base
- Upload favicon.ico to project root (16x16)
- Upload screenshot.png to project root (1200x900)

## Start project

- pnpm install
- pnpm dev

# Known issues

1. To build the images loaded at assets/img we need to reset manually the 'pnpm dev' (watch) command.
2. We must load the fonts two times with different routes to make it work.
