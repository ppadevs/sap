<?php
namespace Sap\Domain;

interface RemoteRequestInterface 
{
	public function getMethodName();
	
	public function getSapParams();
}