<?php /* Smarty version 2.6.26, created on 2013-11-06 13:54:18
         compiled from workflow/publicationFormat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'workflow/publicationFormat.tpl', 11, false),array('function', 'load_url_in_div', 'workflow/publicationFormat.tpl', 13, false),array('modifier', 'assign', 'workflow/publicationFormat.tpl', 11, false),array('modifier', 'concat', 'workflow/publicationFormat.tpl', 12, false),array('modifier', 'uniqid', 'workflow/publicationFormat.tpl', 12, false),)), $this); ?>
<?php $this->assign('publicationFormatId', $this->_tpl_vars['publicationFormat']->getId()); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.proof.ProofFilesGridHandler",'op' => 'fetchGrid','monographId' => $this->_tpl_vars['monograph']->getId(),'publicationFormatId' => $this->_tpl_vars['publicationFormatId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'proofGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'proofGridUrl'));?>

<?php $this->assign('proofContainerId', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='proofGrid-')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['publicationFormatId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['publicationFormatId'])))) ? $this->_run_mod_handler('concat', true, $_tmp, '-') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, '-')))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['proofContainerId'],'url' => $this->_tpl_vars['proofGridUrl']), $this);?>
