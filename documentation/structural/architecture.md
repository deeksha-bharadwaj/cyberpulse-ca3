# CyberPulse System Architecture

## Technology Stack
- Browser: Safari/Chrome (Client)
- Web Server: Apache (MAMP 8888)
- CMS: WordPress 6.9.4
- Language: PHP 8.3
- Database: MySQL 8.0
- Local Environment: MAMP on macOS

## Architecture Diagram
Browser -> MAMP Apache (port 8888) -> WordPress (PHP) -> MySQL Database

## Plugins Architecture
- WP 2FA: Handles MFA authentication layer
- WooCommerce: Handles payment and subscription management
- Members: Handles role-based access control
- Elementor: Handles page building and UI
- Akismet: Handles spam protection
- Wordfence: Handles security scanning

## Database Tables (prefix: sec_xk7_)
- sec_xk7_users: User accounts
- sec_xk7_posts: Articles and pages
- sec_xk7_comments: Article comments
- sec_xk7_usermeta: User roles and metadata
- sec_xk7_options: Site configuration
- sec_xk7_woocommerce_orders: Subscription orders

## Security Layers
1. Public boundary: Apache serves public pages
2. Authenticated boundary: WordPress session management
3. Privileged boundary: WordPress role-based access
4. External boundary: WooCommerce payment gateway
