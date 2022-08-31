# Php product feeder


## How to use Project
```
php -S localhost:1234 index.php
```


## How to use Modules
### Json Controller
```
include 'JsonController.php';

$json=new Json();

$json->All_row();
```
You can use this method  in all modules.(LogFactory,json controller,xml controller) .If you need more detail about project .You can run and go to index page for details.

## Missings | 	deficiencies  !
1.All modules need to improvements,they are work in basic level but they can more effective with subclass.

2.I need time for post and get  requests for url routing.

3.Test and Log not used in this projects

## Architecture
* views
  * 404.php
  * index.php
  * info.php
* Xml
  * XmlController.php
  * add-item.php
  * delete-item.php
  * get-item.php
  * items.php
* Json
  * JsonController.php
  * add-item.php
  * delete-item.php
  * get-item.php
  * items.php
* Data_Folder
  * products.json
* Test Folder
  * TestController.php
* Logs
  * LogFactory.php
* routes.php
* router.php


Note: All modules developed independents from each other.They need only product.json and router.php need view folder .

## Dependencies
https://phprouter.com/   I have used this library for url routing.

## Tracking Log

* Day 1 (2022/8/23 ):<s> Create project and software architecture. </s>
* Day 2 (2022/8/24 ): <s>Solve the technical issues &  start to develop libraries  </s>

* Day 3(2022/8/25 ): <s>Start to develop routing & finish the libraries</s>

* Day 4(2022/8/26 ): <s>complete main jobs.</s>

* Day 5 (2022/8/27 ): <s>writing documentation</s>

* Day 6 (2022/8/28 ): <s>organize all things</s>

* Day 7 (2022/8/29 ): <s>Develop Test cases with framework </s> 
* Day 7 (2022/8/30 ): <s>Project submission</s>


## Future Features
1. Cache development
2. Dockerizing
3. Documentation
4. Test  & Log implementation
