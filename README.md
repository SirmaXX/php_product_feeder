# Php product feeder


## How to use Project
```
php -S localhost:1234 index.php
```


## How to use Modules
### Json Controller
```
include 'lib/JsonController.php';

$json=new Json();

$json->All_row();
```
You can use this method  in all modules.(Logs,router,json,xml controller)

## Missings | 	deficiencies  !
All properties are developed but  I couldn't create routing specific id's api on http methods.
## Architecture
* Views
* Lib Folder
  * JsonController.php
  * XmlController.php
* Json Folder
  * products.json
* index.php
* Test Folder
  * TestController.php
* Logs
  * LogFactory.php


Note: All modules developed independents from each other.

## Tracking Log

* Day 1 (2022/8/23 ):<s> Create project and software architecture. </s>
* Day 2 (2022/8/24 ): <s>Solve the technical issues &  start to develop libraries  </s>

* Day 3(2022/8/25 ): <s>Start to develop routing & finish the libraries</s>

* Day 4(2022/8/26 ): <s>complete main jobs.</s>

* Day 5 (2022/8/27 ): <s>writing documentation</s>

* Day 6 (2022/8/28 ): <s>organize all things</s>

* Day 7 (2022/8/29 ): <s>Develop Test cases with framework </s>
* Day 7 (2022/8/30 ): Project submission


## Future Features
1. Cache development
2. Dockerizing
3. Documentation