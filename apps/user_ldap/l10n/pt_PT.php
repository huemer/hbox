<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Falhou a limpar os mapas",
"Failed to delete the server configuration" => "Erro ao eliminar a configuração do servidor",
"The configuration is valid and the connection could be established!" => "A configuração está correcta e foi possível estabelecer a ligação!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "A configuração está correcta, mas não foi possível estabelecer o \"laço\", por favor, verifique as configurações do servidor e as credenciais.",
"The configuration is invalid. Please have a look at the logs for further details." => "A configuração é inválida. Por favor, veja o log do ownCloud para mais detalhes.",
"No action specified" => "Nenhuma acção especificada",
"No configuration specified" => "Nenhuma configuração especificada",
"No data specified" => "Nenhuma data especificada",
" Could not set configuration %s" => "Não foi possível definir a configuração %s",
"Deletion failed" => "Erro ao apagar",
"Take over settings from recent server configuration?" => "Assumir as configurações da configuração do servidor mais recente?",
"Keep settings?" => "Manter as definições?",
"Cannot add server configuration" => "Não foi possível adicionar as configurações do servidor.",
"mappings cleared" => "Mapas limpos",
"Success" => "Sucesso",
"Error" => "Erro",
"Configuration OK" => "Configuração OK",
"Configuration incorrect" => "Configuração incorreta",
"Configuration incomplete" => "Configuração incompleta",
"Select groups" => "Seleccionar grupos",
"Select object classes" => "Selecionar classes de objetos",
"Select attributes" => "Selecionar atributos",
"Connection test succeeded" => "Teste de conecção passado com sucesso.",
"Connection test failed" => "Erro no teste de conecção.",
"Do you really want to delete the current Server Configuration?" => "Deseja realmente apagar as configurações de servidor actuais?",
"Confirm Deletion" => "Confirmar a operação de apagar",
"_%s group found_::_%s groups found_" => array("%s grupo encontrado","%s grupos encontrados"),
"_%s user found_::_%s users found_" => array("%s utilizador encontrado","%s utilizadores encontrados"),
"Invalid Host" => "Hospedeiro Inválido",
"Could not find the desired feature" => "Não se encontrou a função desejada",
"Save" => "Guardar",
"Test Configuration" => "Testar a configuração",
"Help" => "Ajuda",
"only those object classes:" => "apenas essas classes de objetos:",
"only from those groups:" => "apenas desses grupos:",
"Edit raw filter instead" => "Editar filtro raw em vez disso",
"Raw LDAP filter" => "Filtro LDAP Raw",
"The filter specifies which LDAP groups shall have access to the %s instance." => "O filtro especifica quais grupos LDAP devem ter acesso à instância %s.",
"groups found" => "grupos encontrados",
"LDAP Username:" => "Nome de utilizador LDAP:",
"LDAP Email Address:" => "Endereço de correio eletrónico LDAP:",
"Other Attributes:" => "Outros Atributos:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Define o filtro a aplicar, quando se tenta uma sessão. %%uid substitui o nome de utilizador na ação de início de sessão. Exemplo: \"uid=%%uid\"",
"Add Server Configuration" => "Adicionar configurações do servidor",
"Host" => "Anfitrião",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Pode omitir o protocolo, excepto se necessitar de SSL. Neste caso, comece com ldaps://",
"Port" => "Porto",
"User DN" => "DN do utilizador",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "O DN to cliente ",
"Password" => "Password",
"For anonymous access, leave DN and Password empty." => "Para acesso anónimo, deixe DN e a Palavra-passe vazios.",
"One Base DN per line" => "Uma base DN por linho",
"You can specify Base DN for users and groups in the Advanced tab" => "Pode especificar o ND Base para utilizadores e grupos no separador Avançado",
"Limit %s access to users meeting these criteria:" => "Limitar o acesso a %s de utilizadores com estes critérios:",
"users found" => "utilizadores encontrados",
"Back" => "Voltar",
"Continue" => "Continuar",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Aviso:</b> A aplicação user_ldap e user_webdavauth são incompativeis. A aplicação pode tornar-se instável. Por favor, peça ao seu administrador para desactivar uma das aplicações.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Aviso:</b> O módulo PHP LDAP não está instalado, logo não irá funcionar. Por favor peça ao administrador para o instalar.",
"Connection Settings" => "Definições de ligação",
"Configuration Active" => "Configuração activa",
"When unchecked, this configuration will be skipped." => "Se não estiver marcada, esta definição não será tida em conta.",
"Backup (Replica) Host" => "Servidor de Backup (Réplica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Forneça um servidor (anfitrião) de backup. Deve ser uma réplica do servidor principal de LDAP/AD ",
"Backup (Replica) Port" => "Porta do servidor de backup (Replica)",
"Disable Main Server" => "Desactivar servidor principal",
"Only connect to the replica server." => "Ligar apenas ao servidor de réplicas.",
"Turn off SSL certificate validation." => "Desligar a validação de certificado SSL.",
"Cache Time-To-Live" => "Cache do tempo de vida dos objetos no servidor",
"in seconds. A change empties the cache." => "em segundos. Uma alteração esvazia a cache.",
"Directory Settings" => "Definições de directorias",
"User Display Name Field" => "Mostrador do nome de utilizador.",
"The LDAP attribute to use to generate the user's display name." => "Atributo LDAP para gerar o nome de utilizador do ownCloud.",
"Base User Tree" => "Base da árvore de utilizadores.",
"One User Base DN per line" => "Uma base de utilizador DN por linha",
"User Search Attributes" => "Utilizar atributos de pesquisa",
"Optional; one attribute per line" => "Opcional; Um atributo por linha",
"Group Display Name Field" => "Mostrador do nome do grupo.",
"The LDAP attribute to use to generate the groups's display name." => "Atributo LDAP para gerar o nome do grupo do ownCloud.",
"Base Group Tree" => "Base da árvore de grupos.",
"One Group Base DN per line" => "Uma base de grupo DN por linha",
"Group Search Attributes" => "Atributos de pesquisa de grupo",
"Group-Member association" => "Associar utilizador ao grupo.",
"Special Attributes" => "Atributos especiais",
"Quota Field" => "Quota",
"Quota Default" => "Quota padrão",
"in bytes" => "em bytes",
"Email Field" => "Campo de email",
"User Home Folder Naming Rule" => "Regra da pasta inicial do utilizador",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Deixe vazio para nome de utilizador (padrão). De outro modo, especifique um atributo LDAP/AD.",
"Internal Username" => "Nome de utilizador interno",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Por padrão o nome de utilizador interno vai ser criado através do atributo UUID. Desta forma é assegurado que o nome é único e os caracteres não necessitam de serem convertidos. O nome interno tem a restrição de que apenas estes caracteres são permitidos: [ a-zA-Z0-9_.@- ]. Outros caracteres são substituídos pela sua correspondência ASCII ou simplesmente omitidos. Mesmo assim, quando for detetado uma colisão irá ser acrescentado um número. O nome interno é usado para identificar o utilizador internamente. É também o nome utilizado para a pasta inicial no ownCloud. É também parte de URLs remotos, como por exemplo os serviços *DAV. Com esta definição, o comportamento padrão é pode ser sobreposto. Para obter o mesmo comportamento antes do ownCloud 5 introduza o atributo do nome no campo seguinte. Deixe vazio para obter o comportamento padrão. As alterações apenas serão feitas para utilizadores mapeados (adicionados) LDAP.",
"Internal Username Attribute:" => "Atributo do nome de utilizador interno",
"Override UUID detection" => "Passar a detecção do UUID",
"UUID Attribute for Users:" => "Atributo UUID para utilizadores:",
"UUID Attribute for Groups:" => "Atributo UUID para grupos:",
"Username-LDAP User Mapping" => "Mapeamento do utilizador LDAP",
"Clear Username-LDAP User Mapping" => "Limpar mapeamento do utilizador-LDAP",
"Clear Groupname-LDAP Group Mapping" => "Limpar o mapeamento do nome de grupo LDAP"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
