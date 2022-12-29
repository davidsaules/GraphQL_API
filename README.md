# GraphQL API

This is an API that manages the product catalog for an E-commerce made with GraphQL.

## Tech

There were used various technologies to build the API
- Laravel sail (PHP)
- MySQL
- GraphQL
- Docker

## Prerequisites

It is neccesary to install Docker and keep the engine running because laravel sail uses docker compose. Also, it is important to maintain ports 80 and 3306 available for apache and mysql respectively.


```
https://docs.docker.com/get-docker/
```

## Execution

It is necessary to get inside the project folder.

```sh
cd GraphQL_API
```
Then, remove all images and volumes

```sh
./vendor/bin/sail down --rmi all -v
```

Execute command to create a docker container with everything we need. 

```sh
./vendor/bin/sail up -d
```

And finally, create the database and seed it with the following commands

```sh
./vendor/bin/sail artisan migrate:fresh
./vendor/bin/sail artisan db:seed
```


The GraphQL library provide an IDE to test the API in the following URL. 

```sh
http://localhost/graphiql
```
Once the docker container is up and running, we can test our API.

## Exercise

Here, the queries and mutations needed to test the API are provided

- Define the main entities for building a GraphQL API for managing (CRUD) our products and catalogs.
Model a GraphQL schema for the entities you identified
Inside the *app* folder, there is another folder called *GraphQL*, which contains types, schemas, queries and mutations:
```sh
GraphQL_API/app/GraphQL/
```
- Write a GraphQL query to get all the products that belong to a specific brand defined by a user.
```json
query brandProducts{
  brand(id: 1){
    bnd_name
    products{
      prod_category
      prod_size
      prod_color
    }
  }
}
```
### Mutations


- Write a GraphQL mutation for creating a product.

```json
mutation {
  createProduct(
    prod_category: "sun care"
    prod_color: "pink"
    prod_size: 13
    prod_price: 25
    prod_bnd_id: 1
  ){
    prod_id
    prod_category
    prod_color
    prod_size
    prod_price
    brand{
      bnd_name
    }
  }
}
```

- Write a GraphQL mutation for adding a product variant.
```json
mutation {
  updateProduct(
    prod_id: 1
    prod_category: "hair care"
    prod_color: "pink"
    prod_size: 13
    prod_price: 25
    prod_bnd_id: 1
  ){
    prod_id
    prod_category
    prod_color
    prod_size
    prod_price
    brand{
      bnd_name
    }
  }
}
```


- Write a GraphQL mutation for deleting a brand.
```json
mutation {
  deleteBrand(bnd_id: 1)
}
```
