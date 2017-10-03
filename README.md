# PHP MVC Demonstration

## Introduction

This Repo had a demonstration for the basics of Model View Controller architecture using PHP. The purpose of this is to abstract the roles to make it easy to update and manage tasks. 

While the views and controller do not include it, the **Users** model also gives all of the methods to build out a user management system.

## Setup

Included with the files are a Vagrant Box with provisions to run this code. You will need to create a database on the Vagrant box with the name of **demo** and one table with **Users**. The Users table needs fields of **user_name** and **user_pass** to run. Those fields need to be varchar with a length of 255.

## Usage

This demonstration allows a user to land on a page, navigate to registration and to be able to log in. This barebones code gives the framework to build a simple blog by adapting the example methods provided with this codebase.