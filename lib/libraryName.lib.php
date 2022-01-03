<?php 
/**
 * @param libraryName - MODULE LIBRARY
 * this param as been same at file name
 */
class libraryName
{
	private $tbl;
	public $label_module;

	/**
	 * Constructor
	 * @param int $userId
	 */
	function __construct()
	{
		$tablesModule       = ['MODULE_TABLE'];
		$this->tbl          = get_module_main_tbl($tablesModule);
		$this->userId       = claro_get_current_user_id();
		$this->label_module = "MODULE_CODE";
	}
}