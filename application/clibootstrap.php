<?php
/**
 * Copyright 2016 The President and Fellows of Harvard College
 *
 *   Licensed under the Apache License, Version 2.0 (the "License");
 *   you may not use this file except in compliance with the License.
 *   You may obtain a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 *   Unless required by applicable law or agreed to in writing, software
 *   distributed under the License is distributed on an "AS IS" BASIS,
 *   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *   See the License for the specific language governing permissions and
 *   limitations under the License.
 *
 */
 
set_include_path('.' . PATH_SEPARATOR . '../library' 
	. PATH_SEPARATOR . '../application/default/models' 
	. PATH_SEPARATOR . '../application/default/models/dao/functions' 
	. PATH_SEPARATOR . '../application/default/models/dao/locations' 
	. PATH_SEPARATOR . '../application/default/models/dao/people' 
	. PATH_SEPARATOR . '../application/default/models/dao/proposalapproval' 
	. PATH_SEPARATOR . '../application/default/models/dao/records' 
	. PATH_SEPARATOR . '../application/default/models/dao/reporting' 
	. PATH_SEPARATOR . '../application/default/models/domain/custom'
	. PATH_SEPARATOR . '../application/default/models/domain/functions'
	. PATH_SEPARATOR . '../application/default/models/domain/locations'
	. PATH_SEPARATOR . '../application/default/models/domain/people'
	. PATH_SEPARATOR . '../application/default/models/domain/proposalapproval'
	. PATH_SEPARATOR . '../application/default/models/domain/records'
	. PATH_SEPARATOR . '../application/default/models/domain/reporting'
	. PATH_SEPARATOR . get_include_path());

require_once 'CLIInitializer.php';
require_once "Zend/Loader/Autoloader.php"; 

// Set up autoload.
$loader = Zend_Loader_Autoloader::getInstance();
$loader->setFallbackAutoloader(true);

$env = 'dev';
// Change $env variable to 'prod' parameter under production environment
$initializer = new CLIInitializer($env);

//Start session
Zend_Session::start();

?>
