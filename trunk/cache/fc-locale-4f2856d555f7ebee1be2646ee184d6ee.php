<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin Usuários em XML',
  'plugins.importexport.users.description' => 'Importar e exportar usuários no formato XML',
  'plugins.importexport.users.cliUsage' => 'Uso: {$scriptName} {$pluginName} [comando] ...
Comandos:
	import [xmlFileName] [press_path] [optional flags]
	export [xmlFileName] [press_path]
	export [xmlFileName] [press_path] [role_path1] [role_path2] ...

Flags opcionais:
	continue_on_error: Caso especificado, não interrompe a importação de usuários mesmo ocorrendo erro

	send_notify: Caso especificado, enviar e-mails de notificação contendo login
		e senha para usuários importados

Examples:
	Import users into myPress from myImportFile.xml, continuing on error:
	{$scriptName} {$pluginName} import myImportFile.xml myPress continue_on_error

	Export all users from myPress:
	{$scriptName} {$pluginName} export myExportFile.xml myPress

	Export all users registered as reviewers, along with their reviewer roles only:
	{$scriptName} {$pluginName} export myExportFile.xml myPress reviewer',
  'plugins.importexport.users.import.importUsers' => 'Importar Cadastros',
  'plugins.importexport.users.import.instructions' => 'Escolha um documento XML contendo as informações de cadastro para importação nesta revista. Veja a ajuda do sistema para detalhes sobre o formato do documento.<br /><br />Caso o documento possua logins ou e-mails já cadastrados no sistema, os dados cadastrais não serão importados e quaisquer funções adicionais serão designadas aos cadastros existentes.',
  'plugins.importexport.users.import.failedToImportUser' => 'Falha na importação de cadastro',
  'plugins.importexport.users.import.failedToImportRole' => 'Falha ao designar função ao cadastro',
  'plugins.importexport.users.import.dataFile' => 'Arquivo de dados do Usuário',
  'plugins.importexport.users.import.sendNotify' => 'Enviar notificação via e-mail para cada cadastro importado, com login e senha do usuário.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar a importação de outros cadastros caso ocorra uma falha.',
  'plugins.importexport.users.import.noFileError' => 'Nenhum arquivo enviado!',
  'plugins.importexport.users.import.usersWereImported' => 'Os seguintes cadastros foram importados com sucesso para o sistema',
  'plugins.importexport.users.import.errorsOccurred' => 'Erros ocorridos durante a importação',
  'plugins.importexport.users.import.confirmUsers' => 'Deseja importar os usuários listados para o sistema',
  'plugins.importexport.users.unknownPress' => 'Caminho de revista inválido',
  'plugins.importexport.users.export.exportUsers' => 'Exportar Cadastros',
  'plugins.importexport.users.export.exportByRole' => 'Exportar Por Função',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar Todos',
  'plugins.importexport.users.export.errorsOccurred' => 'Error ocorridos durante a exportação',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Não foi possível escrever para o arquivo',
  'plugins.importexport.users.import.warning' => 'Aviso',
  'plugins.importexport.users.import.encryptionMismatch' => 'Não é possível criptografados com {$importHash}; o sisema está configurado para utilizar {$ompHash}. Caso continue, será necessário recriar todas as senhas de usuários importados.',
); ?>