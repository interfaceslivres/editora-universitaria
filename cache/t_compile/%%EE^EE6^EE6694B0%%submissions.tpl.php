<?php /* Smarty version 2.6.26, created on 2013-10-31 12:41:01
         compiled from dashboard/submissions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'dashboard/submissions.tpl', 12, false),array('function', 'load_url_in_div', 'dashboard/submissions.tpl', 13, false),array('modifier', 'assign', 'dashboard/submissions.tpl', 12, false),)), $this); ?>

<!-- Author and editor submissions grid -->
<?php if (array_intersect ( array ( ROLE_ID_AUTHOR , ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.mySubmissions.MySubmissionsListGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'mySubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'mySubmissionsListGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'mySubmissionsListGridContainer','url' => ($this->_tpl_vars['mySubmissionsListGridUrl'])), $this);?>

<?php endif; ?>

<!-- Unassigned submissions grid: If the user is a press manager or a series editor, then display these submissions which have not been assigned to anyone -->
<?php if (array_intersect ( array ( ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.unassignedSubmissions.UnassignedSubmissionsListGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'unassignedSubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'unassignedSubmissionsListGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'unassignedSubmissionsListGridContainer','url' => ($this->_tpl_vars['unassignedSubmissionsListGridUrl'])), $this);?>

<?php endif; ?>

<!-- Assigned submissions grid: Show all submissions the user is assigned to (besides their own) -->
<?php if (array_intersect ( array ( ROLE_ID_SITE_ADMIN , ROLE_ID_PRESS_MANAGER , ROLE_ID_SERIES_EDITOR , ROLE_ID_REVIEWER , ROLE_ID_PRESS_ASSISTANT ) , $this->_tpl_vars['userRoles'] )): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.assignedSubmissions.AssignedSubmissionsListGridHandler",'op' => 'fetchGrid'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'assignedSubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'assignedSubmissionsListGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'assignedSubmissionsListGridContainer','url' => ($this->_tpl_vars['assignedSubmissionsListGridUrl'])), $this);?>

<?php endif; ?>