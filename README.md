# Data Analyst Portfolio CMS - Laravel + Filament Admin Dashboard

A Laravel-based CMS with Filament Admin for managing a Data Analyst portfolio. Full CRUD management for portfolio content with relationships and file uploads.

## Features

- **Full CRUD Operations** - Manage all portfolio content through Filament admin
- **File Uploads** - Images and CV storage via Laravel storage
- **Dynamic Relationships** - Projects, Project Details, Project Items, Contact Phones
- **Search & Pagination** - All tables have searchable columns
- **Production-Ready** - Proper validation and scalable structure

## Tech Stack

- Laravel 12+
- Filament PHP v3
- MySQL/SQLite

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan filament:install
php artisan make:filament-user
```

## Database Migrations

### Tables Overview

| Table | Description |
|-------|-------------|
| `heroes` | Hero section with main image and CV |
| `abouts` | About section with multiple descriptions |
| `projects` | Main project info |
| `project_details` | Individual project content |
| `project_items` | Multiple images per project |
| `skills` | Skills with descriptions |
| `educations` | Education history |
| `experiences` | Work experience |
| `contacts` | Contact information |
| `contact_phones` | Multiple phone numbers |

### Relationships

```
Project → hasOne ProjectDetail
ProjectDetail → belongsTo Project
ProjectDetail → hasMany ProjectItems
ProjectItem → belongsTo ProjectDetail
Contact → hasMany ContactPhones
ContactPhone → belongsTo Contact
```

## Filament Resources

| Resource | Model |
|----------|-------|
| `HeroResource` | App\Models\Hero |
| `AboutResource` | App\Models\About |
| `ProjectResource` | App\Models\Project |
| `ProjectDetailResource` | App\Models\ProjectDetail |
| `SkillResource` | App\Models\Skill |
| `EducationResource` | App\Models\Education |
| `ExperienceResource` | App\Models\Experience |
| `ContactResource` | App\Models\Contact |

## Form Fields

### Hero
- Textarea: description
- FileUpload: main_image
- FileUpload: additional_image
- TextInput: role
- FileUpload: cv_file

### About
- TextInput: title
- Textarea: description1
- Textarea: description2
- Textarea: description3

### Project
- TextInput: title
- TextInput: subtitle
- Textarea: description
- FileUpload: image

### ProjectDetail
- Select: project_id
- Textarea: description
- TextInput: project_link
- TextInput: tools (tags)
- Repeater: project_items
  - FileUpload: image
  - TextInput: name
  - Textarea: text

### Skill
- Textarea: description
- TextInput: skill

### Education
- TextInput: year_from
- TextInput: year_to
- TextInput: program
- Textarea: description
- TextInput: institution_name

### Experience
- TextInput: year
- TextInput: company_name
- Textarea: description

### Contact
- TextInput: email
- TextInput: github_link
- TextInput: linkedin_link
- TextInput: facebook_link
- Repeater: phones
  - TextInput: phone

## File Storage

- Uses Laravel storage (public disk)
- File paths stored in database
- Uploads work with Filament FileUpload

## Usage

1. Run migrations: `php artisan migrate`
2. Create admin user: `php artisan make:filament-user`
3. Login at `/admin`
4. Manage portfolio content through Filament admin

## Routes

- Admin: `/admin`
- Login: `/admin/login`

## Development

```bash
# Create migrations
php artisan make:migration create_heroes_table
php artisan make:migration create_abouts_table
php artisan make:migration create_projects_table
php artisan make:migration create_project_details_table
php artisan make:migration create_project_items_table
php artisan make:migration create_skills_table
php artisan make:migration create_educations_table
php artisan make:migration create_experiences_table
php artisan make:migration create_contacts_table
php artisan make:migration create_contact_phones_table

# Create models
php artisan make:model Hero
php artisan make:model About
php artisan make:model Project
php artisan make:model ProjectDetail
php artisan make:model ProjectItem
php artisan make:model Skill
php artisan make:model Education
php artisan make:model Experience
php artisan make:model Contact
php artisan make:model ContactPhone

# Create Filament resources
php artisan make:filament-resource HeroResource
php artisan make:filament-resource AboutResource
php artisan make:filament-resource ProjectResource
php artisan make:filament-resource ProjectDetailResource
php artisan make:filament-resource SkillResource
php artisan make:filament-resource EducationResource
php artisan make:filament-resource ExperienceResource
php artisan make:filament-resource ContactResource

# Run all migrations
php artisan migrate
```

## Notes

- Project Items use Repeater for dynamic multiple entries
- Contact Phones use Repeater for multiple phone numbers
- All relationships use cascade delete for data integrity
- Images stored in `storage/app/public/`