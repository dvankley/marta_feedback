# MARTA Feedback

## Overview
This project was created during the RHoK December 2012 event. The main goals are twofold:

- Give travelers the information they need to make informed decisions about using MARTA, specific to their needs.
- Drive positive change in MARTA itself by providing feedback on positive and negative performance to allow targeted improvement.

## Backend
### Framework
The [Yii framework](http://www.yiiframework.com/) has been selected for this project due to its solid performance and ease of use. Yii is a pretty run of the mill LAMP framework. I'm not married to it if someone feels strongly about migrating.

### DB
Currently we're using MySQL for application data (users, reviews, etc) and Google Fusion Tables for all the MARTA-provided route, trip, and stop information.

## Frontend
### Nachiket, do your thing here
We'll probably use the Yii Bootstrap extension

## MARTA Data and Mapping Subsystem
### MARTA Fusion Tables Data
MARTA route, trip, and stop information is provided by [MARTA](http://www.itsmarta.com/marta-developer-resources.aspx). We've uploaded it to Google Fusion Tables for ease of mapping and because a cloud DB server is cool.

#### Fusion Tables
1. Routes: 1r44KQ5FwKABZVqkR10t6mZBKDjV6U5QASCZN_is
2. Trips: 1WhERvlNa-qrbivcvmN2o7DbZXtt3fEGwM5fsNXc
3. Stops: 1aKK6FveL2YsP7EMdG5eUZSLjpjYcwTkdxyzj8zY
4. Route/trip/stop mapping table: 1k8rQw5krM5mUr5-2Q-vytLMAn8iIGDMF5jYXcOw

### Mapping
Mapping is provided out of the box by Fusion Tables, with some further processing and styling done in the frontend with Javascript. More details TBD.

## Installing the Application
1. Clone the github repo into a directory served by your webserver that is also writeable by the webserver process. Only the `index.php` file needs to be directly served by the webserver, the `index.php` bootstrap script will load other resources as needed.

2. Install the Yii framework into a directory somewhere near you web directory. In the main `index.php` file, change the path in the following line:
	$yii=dirname(__FILE__).'/../../../yii/framework/yii.php';
to point from the `index.php` file to the location of the `yii.php` file in your newly installed Yii framework folder.

3. Set up MySQL on your local machine and make sure it's running. By default, the application connects on 127.0.0.1 root with no password, which can of course be changed if desired. Import the latest DB dump to make sure you're up to date with the DB schema.

4. Open your web browser and go to `http://yourwebserverpath/whereveryouclonedtherepo/index.php`. This should display the default landing page. From there, you can access other actions by appending `?r=controller/action`. Eventually we'll set up `mod_rewrite` to make this less ghetto.