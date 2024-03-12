# Multi-Tenancy Multi-Database Approach App

Welcome to our multi-tenancy multi-database approach application! This app is designed to handle multiple tenants, each with their own database, efficiently. Here's a brief overview of how it works and how to use it.

## Introduction

Our application follows a multi-tenancy architecture, where each tenant has their own dedicated database. This allows us to isolate tenant data and provide a more secure and scalable solution. We achieve this by parsing the tenant from the domain name, dynamically connecting to the appropriate database for each request.

## Features

- **Multi-Tenancy**: Supports multiple tenants, each with their own database.
- **Dynamic Database Connection**: Connects to the appropriate database based on the request's domain.
- **User Management**: Allows for the management of users within each tenant.
- **Order Tracking**: Users can create and track their orders.
- **Product Management**: Products are associated with orders using a many-to-many relationship.

## Getting Started

To get started with our multi-tenancy application, follow these steps:

1. **Installation**: Clone the repository and install dependencies using Composer.

    ```bash
    git clone https://github.com/islam1l/Multi-Tenancy.git
    cd repository
    composer install
    ```

2. **Configuration**: Set up your database connections in the `.env` file. Ensure each tenant has a unique database connection. Also, configure the landlord database for administrative tasks.

    ```dotenv
    # Tenant Database Variables
    DB_CONNECTION=tenant
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_USERNAME=root
    DB_PASSWORD=

    # Landlord Database Variables
    LANDLORD_DB_HOST=127.0.0.1
    LANDLORD_DB_PORT=3306
    LANDLORD_DB_DATABASE=landlord
    LANDLORD_DB_USERNAME=root
    LANDLORD_DB_PASSWORD=
    ```

3. **Migration**: Run database migrations. For specific tenant migrations, use the dedicated command:

    ```bash
    # Run migrations for specific tenant (optional: --fresh, --seed)
    php artisan tenants:migrate {tenant?} {--fresh} {--seed}
    
    # Default migrations (for admin access)
    php artisan migrate
    ```

4. **Usage**: Start the development server and navigate to the appropriate domain for each tenant.

    ```bash
    php artisan serve
    ```

## Example

Let's say we have two tenants: Tenant A and Tenant B.

- Tenant A's domain: `tenantA.example.com`
- Tenant B's domain: `tenantB.example.com`

When a user visits `tenantA.example.com`, the application dynamically connects to Tenant A's database. Similarly, when a user visits `tenantB.example.com`, the application connects to Tenant B's database. This ensures that each tenant's data is isolated and secure.

## Conclusion

Our multi-tenancy multi-database approach simplifies the management of multiple tenants while providing a scalable and secure solution. By dynamically connecting to the appropriate database based on the request's domain, we ensure data isolation and flexibility.
