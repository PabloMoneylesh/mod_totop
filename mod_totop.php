<?php
defined('_JEXEC') or die;

echo "<a href='#'". 
	"style='background-color: #24b34b; height: 45px; width: 45px; position: fixed; bottom: 10px; right: 10px; padding: 5px;border-radius: 5px;'".
	" onClick='window.scrollTo(0, 0);' title='Вернутся на верх'> ".
	"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16 16\"><g fill=\"#f5f5f5\"><path d=\"M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z\"/><path d=\"M4 10h8L8 5\"/></g></svg>".
	"</a>";