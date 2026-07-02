# GCS Modern GovCon WordPress Theme

This is an installable custom WordPress theme prototype based on the approved GCS homepage direction.

## What is included

- Custom WordPress theme files
- Homepage matching the modern GovCon mockup direction
- Responsive header, navigation, hero, metrics, capabilities, contract vehicles, and footer
- Page templates for:
  - Capabilities
  - Customers
  - Contract Vehicles & Certifications
  - Why GCS
  - Careers
  - Contact
- WordPress Customizer fields for the homepage hero
- Placeholder SVG imagery
- GCS logo included from the provided file

## Installation

1. Log in to WordPress admin.
2. Go to Appearance > Themes > Add New > Upload Theme.
3. Upload `gcs-modern-theme.zip`.
4. Activate the theme.
5. Go to Appearance > Customize > GCS Homepage Content to edit the hero text.
6. Go to Appearance > Menus and create a Primary Menu.
7. Create the following pages and assign the matching template under Page Attributes:
   - Capabilities -> Capabilities template
   - Customers -> Customers template
   - Contract Vehicles -> Contract Vehicles template
   - Why GCS -> Why GCS template
   - Careers -> Careers template
   - Contact -> Contact template
8. Go to Settings > Reading and set your homepage to a static page using the homepage page.

## Recommended production upgrade

For true non-developer editing, ask the developer to add Advanced Custom Fields Pro and convert the repeated sections into editable repeater fields:

- Homepage metrics
- Capability cards
- Certifications
- Contract vehicles
- Customers
- Office locations
- CTA buttons
- Capability statement upload

The theme already includes comments in `inc/acf-json.php` explaining the intended ACF structure.

## Notes for developer

This is a functional starting theme, not a final QA-tested production build. Before launch, the developer should:

- Replace placeholder imagery with licensed images
- Add accessibility QA
- Configure SEO plugin metadata
- Add security headers/caching through hosting or plugin
- Add analytics
- Build ACF Pro fields or Gutenberg blocks for structured editing
- Add real contact form plugin integration
