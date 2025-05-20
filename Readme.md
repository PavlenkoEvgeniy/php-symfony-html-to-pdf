Here's a polished English version for your GitHub README:

---

# Certificate Generator Service

A small web service for creating custom certificates and exporting them to PDF format.

**Tech Stack**:
- PHP 8
- Symfony 7
- wkhtmltopdf
- KnpSnappyBundle

## Features
- Dynamic certificate generation with customizable templates
- PDF export functionality
- Responsive design

## Preview
<img src="preview.png" alt="Certificate Generator Preview" height="300">

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/certificate-generator.git
```

2. Install dependencies:
```bash
composer install
```

3. Configure wkhtmltopdf:
```yaml
# config/packages/knp_snappy.yaml
knp_snappy:
    pdf:
        enabled: true
        binary: /usr/local/bin/wkhtmltopdf
```

## Usage
Run the Symfony development server:
```bash
symfony server:start
```

Access the application at `http://localhost:8000`

## License
MIT
