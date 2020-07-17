<?php
	/**
	 * delete selected files
	 * @author Logan Cai (cailongqun [at] yahoo [dot] com [dot] cn)
	 * @link www.phpletter.com
	 * @since 22/April/2007
	 *
	 */
	require_once(dirname(__FILE__)."../../../../../../inc/lang/en/common.php");
	require_once(dirname(__FILE__)."../../../../../../class/config.class.php");
	$cnf = new JU_Config();
	if (!isset($_SESSION[SESSION_NAME_ID])) {
		die("");
	}
	
	$qStr = "SELECT _contact
			FROM ju_contact_role
			WHERE _contact = ".$_SESSION[SESSION_NAME_ID]."
			AND _role IN(5,6,10)
			AND _journal = ".$cnf->journalCode."
			LIMIT 1;";
	$aut = $cnf->db_conn->query($qStr);
	if ($aut->numRows() == 0) {
		die("");
	}

	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc" . DIRECTORY_SEPARATOR . "config.php");
	$error = "";
	if(CONFIG_SYS_VIEW_ONLY || !CONFIG_OPTIONS_DELETE)
	{
		$error = SYS_DISABLED;
	}
	elseif(!empty($_GET['delete']))
	{//delete the selected file from context menu
		if(!file_exists($_GET['delete']))
		{
			$error = ERR_FILE_NOT_AVAILABLE;
		}
		elseif(!isUnderRoot($_GET['delete']))
		{
			$error = ERR_FOLDER_PATH_NOT_ALLOWED;
		}else
		{
				include_once(CLASS_FILE);
				$file = new file();
				if(is_dir($_GET['delete'])
					 &&  isValidPattern(CONFIG_SYS_INC_DIR_PATTERN, getBaseName($_GET['delete'])) 
					 && !isInvalidPattern(CONFIG_SYS_EXC_DIR_PATTERN, getBaseName($_GET['delete'])))
					{
						$file->delete(addTrailingSlash(backslashToSlash($_GET['delete'])));
					}elseif(is_file($_GET['delete']) 
					&& isValidPattern(CONFIG_SYS_INC_FILE_PATTERN, getBaseName($_GET['delete']))
					&& !isInvalidPattern(CONFIG_SYS_EXC_FILE_PATTERN, getBaseName($_GET['delete']))
					)
					{
						$file->delete(($_GET['delete']));
					}			
		}
	}else 
	{
		if(!isset($_POST['selectedDoc']) || !is_array($_POST['selectedDoc']) || sizeof($_POST['selectedDoc']) < 1)
		{
			$error = ERR_NOT_FILE_SELECTED;
		}
		else 
		{

			include_once(CLASS_FILE);
			$file = new file();
			
			foreach($_POST['selectedDoc'] as $doc)
			{
				if(file_exists($doc) && isUnderRoot($doc))
				{
					if(is_dir($doc)
					 &&  isValidPattern(CONFIG_SYS_INC_DIR_PATTERN, $doc) 
					 && !isInvalidPattern(CONFIG_SYS_EXC_DIR_PATTERN, $doc))
					{
						$file->delete(addTrailingSlash(backslashToSlash($doc)));
					}elseif(is_file($doc) 
					&& isValidPattern(CONFIG_SYS_INC_FILE_PATTERN, $doc)
					&& !isInvalidPattern(CONFIG_SYS_EXC_FILE_PATTERN, $doc)
					)
					{
						$file->delete($doc);
					}					
				}

				
			}
		}		
	}

	echo "{error:'" . $error . "'}";
?>