# Sprint_2_entrega_3
MongoDB data base structure

📄 EXERCISES DESCRIPTION

LEVEL 1

Optical shop data base design

- Exercise 1: Design the data base focussing on reducing the number of read operations for queries about clients and their purchases. 

Collections:

    * Client
        - Embedded documents: address, last_shopings (array of glasses bought by client).
        - References to collections: Client, Sale, Glass.
    * Employee
        - Embedded documents: sales (array of sales ids).
        - References to collections: Sale.
    * Glass
        - References to collections: Provider.
    * Provider  
        - Embedded documents: addresses (array of addresses).
    * Sale 
        - Embedded documents: sold_glasses (array of sold glasses ids and their quantity).
        - References to collections: Glass, Client, Employee.

- Exercise 2: Design the data base focussing on reducing the number of read operations for queries about glasses and their respective providers and buying clients. 

Collections:

    * Client
        - Embedded documents: address. 
        - References to collections: Client.
    * Employee
        - Embedded documents: sales (array of sales ids). 
        - References to collections: Sale.
    * Glass 
        - Embedded document: buying_clients (array of clients ids). 
        - References to collections: Provider, Client.
    * Provider
        - Embedded document: addresses (array of addresses).
    * Sale 
        - Embedded documents: sold_glasses (array of sold glasses ids and their quantity).
        - References to collections: Glass, Client, Employee.

📋 NOTES

- Data in documents (dates, references, etc) is schematic.

💻 TECHNOLOGIES USED

- MongoDB version 6.0.20
- MongoDB Compass Version 1.45.2 (1.45.2)
- Visual Studio Code
- Git/Github
