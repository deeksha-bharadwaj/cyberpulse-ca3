# CyberPulse — Application Security CA3

## Project Overview
CyberPulse is a WordPress-based cybersecurity publishing platform built for MACSH6019 Application Security CA3.

## Team Members
- Deeksha Bharadwaj — Website Development
- Manas Borse — Vulnerability Mapping (OWASP ASVS)
- Pranathi — Structural Models (DFD, ERD, Architecture)

## Technology Stack
- CMS: WordPress 6.9.4
- Local Server: MAMP (Apache + MySQL)
- Theme: Cyber Security Elementor
- Database: MySQL with custom prefix sec_xk7_

## Plugins Used
- WP 2FA — Multi-factor authentication
- WooCommerce — Payment and subscription management
- Members — Role-based access control
- Elementor — Page builder
- Akismet — Spam protection
- Wordfence — Security scanning

## Security Features
- MFA mandatory for all users
- Custom database table prefix (sec_xk7_)
- Role-based access control (Visitor, Subscriber, Premium Subscriber, Specialist, Admin)
- Input sanitisation via WordPress core
- Spam protection via Akismet

## Documentation
- behavioural/ — Use case diagrams, specifications, walkthrough scenarios
- structural/ — DFD, ERD, Architecture diagrams
- vulnerability/ — OWASP ASVS mapping, threat analysis, mitigation plan

## Local Setup
1. Install MAMP
2. Clone this repository to /Applications/MAMP/htdocs/cyberpulse
3. Create MySQL database named cyberpulse
4. Import database from documentation/cyberpulse.sql
5. Update wp-config.php with local database credentials
6. Access site at http://localhost:8888/cyberpulse
