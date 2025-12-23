# Basues Premium Website

A premium, component-based website for Basues brand officially launching in Sri Lanka.

## Features

- **Component-Based Architecture**: Reusable PHP components for easy maintenance
- **Premium Design**: Modern, elegant UI with smooth animations
- **Responsive Layout**: Fully responsive design for all devices
- **PHP Backend**: Server-side functionality for dynamic content
- **Clean Code Structure**: Organized and maintainable codebase

## Project Structure

```
basuesnew/
├── assets/
│   ├── css/
│   │   └── main.css          # Main stylesheet
│   └── js/
│       └── main.js           # Main JavaScript
├── components/
│   ├── header.php            # Header component
│   ├── navigation.php        # Navigation component
│   ├── footer.php            # Footer component
│   └── hero.php              # Hero section component
├── config/
│   └── config.php            # Site configuration
├── pages/
│   ├── about.php             # About page
│   ├── products.php          # Products page
│   └── contact.php           # Contact page
├── index.php                 # Home page
├── process_contact.php       # Contact form handler
└── README.md                 # This file
```

## Setup Instructions

1. **Place files in your web server directory**
   - For XAMPP: `C:\xampp\htdocs\basuesnew\`
   - For other servers: Place in your web root directory

2. **Configure the site**
   - Edit `config/config.php` to update site information
   - Update contact details, social media links, etc.

3. **Access the website**
   - Open your browser and navigate to: `http://localhost/basuesnew/`

## Customization

### Colors & Theme
Edit CSS variables in `assets/css/main.css`:
- `--primary-color`: Main brand color
- `--accent-color`: Accent color
- `--gold-accent`: Gold accent color

### Content
- Update site information in `config/config.php`
- Modify page content in respective PHP files
- Add/remove components as needed

### Contact Form
- Configure email settings in `process_contact.php`
- Uncomment the `mail()` function when ready to send emails

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Technologies Used

- PHP 7.4+
- HTML5
- CSS3 (with CSS Variables)
- JavaScript (Vanilla JS)
- Google Fonts (Poppins & Playfair Display)

## License

© 2024 Basues. All rights reserved.

