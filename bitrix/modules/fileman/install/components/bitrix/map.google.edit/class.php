<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\ErrorCollection;
use Bitrix\Main\SystemException;

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 */

class CGoogleMapEditComponent extends \CBitrixComponent
{
	protected $templatePage = '';

	public function __construct($component = null)
	{
		$this->errors = new ErrorCollection();

		parent::__construct($component);
	}

	public function onPrepareComponentParams($arParams)
	{
		$arParams['MAP_ID'] = isset($arParams['MAP_ID']) ? trim($arParams['MAP_ID']) : 'MAP_EDIT';
		$arParams['MULTIPLE'] = $arParams['MULTIPLE'] === 'Y' ? 'Y' : 'N';

		return parent::onPrepareComponentParams($arParams);
	}

	public function executeComponent()
	{
		try
		{
			$this->checkModules();
			$this->processRequest();

			if(!$this->extractDataFromCache())
			{
				$this->prepareData();

				$this->formatResult();
				$this->setResultCacheKeys(array());

				CJSCore::Init(array('core_uf'));

				$this->includeComponentTemplate($this->templatePage);
				$this->putDataToCache();
			}
		}
		catch(SystemException $e)
		{
			$this->abortDataCache();

			ShowError($e->getMessage());
		}
	}

	protected function checkModules()
	{
		return true;
	}

	protected function processRequest()
	{

	}

	protected function prepareData()
	{

	}

	protected function formatResult()
	{

	}

	/**
	 * Extract data from cache
	 *
	 * @return bool
	 */
	protected function extractDataFromCache()
	{
		return false;
	}

	protected function putDataToCache()
	{
	}

	protected function abortDataCache()
	{
	}

}