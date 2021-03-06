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
 * RecordTemporaryTransferForm
 *
 * @author vcrema
 * Created Mar 5, 2009
 *
 */
 
 class RecordTemporaryTransferForm extends ACORNForm
{
	/**
	 * Initialize the form
	 */
    public function init()
    {
    	$hiddenitemid = new Zend_Form_Element_Hidden('hiddentemptransferitemid');
    	$hiddenitemid->setDecorators(Decorators::$ELEMENT_DECORATORS);
    	$this->addElement($hiddenitemid);
    	
    	$transferlistname = new Zend_Form_Element_Hidden('transferlistname');
    	$transferlistname->setName('transferlistname');
		$transferlistname->setDecorators(Decorators::$ELEMENT_DECORATORS);
		$transferlistname->setValue(TransferNamespace::TEMP_TRANSFER);
    	$this->addElement($transferlistname);
		
    	$transferdateinput = new DateTextField('transferdateinput');
    	$transferdateinput->setLabel('Transfer Date*');
		$transferdateinput->setName('transferdateinput');
		$transferdateinput->setRequired(TRUE);;
    	$transferdateinput->setAttrib('readonly', 'readonly');
		$transferdateinput->setAttrib('onfocus', 'showCalendarChooser(\'transferdateinput\')');
		$this->addElement($transferdateinput);
		
		//Get the current record's info if it exists
    	$item = RecordNamespace::getCurrentItem();
    	$deptid = NULL;
    	$curid = NULL;
    	if (isset($item))
    	{
    		$deptid = $item->getDepartmentID();
    		$curid = $item->getCuratorID();
    	}
    	
		$transferfromselectform = new LocationSelectForm('transferfromselect');
    	$transferfromselectform->setName('transferfromselectform');
    	$transferfromselectform->setRequired(TRUE);
    	$transferfromselectform->setLabel('Transfer From*');
    	$transferfromselectform->addSelectAttrib('onchange', 'updateTransferButtons(\'' . TransferNamespace::TEMP_TRANSFER . '\')');
    	$this->addSubForm($transferfromselectform, 'transferfromselectform');
		
		$transfertoselectform = new LocationSelectForm('transfertoselect');
    	$transfertoselectform->setName('transfertoselectform');
    	$transfertoselectform->setRequired(TRUE);;
    	$transfertoselectform->setLabel('Transfer To*');
    	$transfertoselectform->addSelectAttrib('onchange', 'updateTransferButtons(\'' . TransferNamespace::TEMP_TRANSFER . '\')');
    	$this->addSubForm($transfertoselectform, 'transfertoselectform');
    	
    	$temptransfercommentstextarea = new ACORNTextArea('temptransfercommentstextarea');
		$temptransfercommentstextarea->setName('temptransfercommentstextarea');
		$temptransfercommentstextarea->setLabel('Comments');
    	$this->addElement($temptransfercommentstextarea);
		
		$this->setDecorators(array(
   			array(
   			//Use a view script for the form layout
   			//The view script will call all of the elements and place
   			//them in the desired format.
   			'ViewScript', array('viewScript' => 'record/recordtemporarytransfer.phtml'),
   			//Renders the form.
   			'Form'
   			)
		));
    }
    
    
}
?>