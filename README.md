# Laravel with GitHub Actions

I created this repository for practicing continuous integration using GitHub Actions. There are three workflows implemented in this repository:

-   Testing using PHPunit
-   Security checks
-   Code quality check

This workflows run on every push or pull_request to the main branch.

## Testing using PHPUnit

The build-test.yml workflow build and run PHPUnit tests to ensure that everything is working as expected. The workflow performs the following steps :

```bash
1. Checkout the codebase.
2. Install the project dependencies using Composer.
3. Create a copy of the .env.example file and rename it to .env.
4. Generate an application key.
5. Migrate the database and seed it with test data.
6. Run PHPUnit tests.
```

## Security Checks

The security-check.yml workflow checks the project's dependencies and code for known security vulnerabilities, ensuring that the codebase is secure.
The workflow performs the following steps:

```bash
1. Install PHP using the shivammathur/setup-php action.
2. Checkout the codebase.
3. Install the project dependencies using Composer.
4. Checks for known vulnerabilities in the application's in your PHP code using psalm/psalm-github-security-scan action.
5. Checks composer.json for known vulnerabilities and issues symfonycorp/security-checker-action action.
```

## Code quality check

The code-style.yml workflow file runs a code quality check on the code in the repository using laravel/pint. Here are the steps in the workflow:

```bash
1. Install PHP with laravel/pint using the shivammathur/setup-php action.
2. Checkout the codebase.
3. run laravel pint to check and fix code style.
```

## Conclusion

With these three workflows, you can ensure that your code is continuously tested for functionality, security, and quality. By setting up these workflows using GitHub Actions, you can automate the process and catch issues early in the development cycle.

### Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.
