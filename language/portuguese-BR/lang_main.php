<?php
global $users, $torrents, $seeds, $leechers, $percent;
// $language["rtl"]="rtl"; // Se o seu idioma é da direita para a esquerda, descomente esta linha
// $language["charset"]="ISO-8859-1"; // Descomentar esta linha se o seu Idioma for diferente ao do tracker
$language["ACCOUNT_CONFIRM"]="Confirmação da conta em $SITENAME site.";
$language["ACCOUNT_CONGRATULATIONS"]="Parabéns sua conta agora é válida!<br />Agora você pode <a href=index.php?page=login>Entrar</a> No site usando a sua conta.";
$language["ACCOUNT_CREATE"]="Criar conta";
$language["ACCOUNT_DELETE"]="Apagar conta";
$language["ACCOUNT_DETAILS"]="Detalhes da conta";
$language["ACCOUNT_EDIT"]="Editar conta";
$language["ACCOUNT_MGMT"]="Gerenciar conta";
$language["ACCOUNT_MSG"]="Olá,\n\nEste e-mail foi enviado porque alguém pediu uma conta em nosso site com este endereço de e-mail.\nSe você não for o requerente ignorar este e-mail, caso queira confirmar a conta \n\nSaudações de toda staff.";
$language["ACTION"]="Ação";
$language["ACTIVATED"]="Ativo";
$language["ACTIVE"]="Status";
$language["ACTIVE_ONLY"]="Apenas Ativo";
$language["ADD"]="Adicionar";
$language["ADDED"]="Adicionado";
$language["ADMIN_CPANEL"]="Painel de controle Admin";
$language["ADMINCP_NOTES"]="Aqui você pode controlar todas as configurações do seu tracker...";
$language["ALL"]="Todos";
$language["ALL_SHOUT"]="Todas Mensagens";
$language["ANNOUNCE_URL"]="url announce do Tracker:";
$language["ANONYMOUS"]="Anônimos";
$language["ANSWER"]="Responda";
$language["AUTHOR"]="Autor";
$language["AVATAR_URL"]="Avatar (url): ";
$language["AVERAGE"]="Média";
$language["BACK"]="Voltar";
$language["BAD_ID"]="Bad ID!";
$language["BCK_USERCP"]="Voltar ao painel do usuário";
$language["BLOCK"]="Bloco";
$language["BODY"]="Corpo";
$language["BOTTOM"]="Embaixo";
$language["BY"]="Por";
$language["CANT_DELETE_ADMIN"]="É impossível excluir outro admin!";
$language["CANT_DELETE_NEWS"]="Você não está autorizado excluir notícias!";
$language["CANT_DELETE_TORRENT"]="Você não está autorizado a excluir este torrent!...";
$language["CANT_DELETE_USER"]="Você não está autorizado a excluir usuários!";
$language["CANT_DO_QUERY"]="Não pode fazer consulta SQL - ";
$language["CANT_EDIT_TORR"]="Você não está autorizado a editar torrent!";
$language["CANT_FIND_TORRENT"]="Não é possível localizar o arquivo torrent!";
$language["CANT_READ_LANGUAGE"]="Não é possível ler o arquivo idioma!";
$language["CANT_SAVE_CONFIG"]="Não é possível salvar as configurações em config.php";
$language["CANT_SAVE_LANGUAGE"]="Não é possível salvar o arquivo idioma";
$language["CANT_WRITE_CONFIG"]="Aviso: não podia escrever no config.php!";
$language["CATCHUP"]="Marcar todos como lido";
$language["CATEGORY"]="Categoria";
$language["CATEGORY_FULL"]="Categoria";
$language["CENTER"]="centro";
$language["CHANGE_PID"]="Alterar PID";
$language["CHARACTERS"]="caracteres";
$language["CHOOSE"]="Escolha";
$language["CHOOSE_ONE"]="Escolha um";
$language["CLICK_HERE"]="Clique Aqui";
$language["CLOSE"]="Fexar";
$language["COMMENT"]="Comentário";
$language["COMMENT_1"]="Comentário";
$language["COMMENT_PREVIEW"]="Prever comentário";
$language["COMMENTS"]="comentários";
$language["CONFIG_SAVED"]="Parabéns, nova configuração foi salva";
$language["COUNTRY"]="País";
$language["CURRENT_DETAILS"]="Detalhes Atuais";
$language["DATABASE_ERROR"]="Error na Base de Dados.";
$language["DATE"]="Data";
$language["DB_ERROR_REQUEST"]="Erro na base de dados. Não é possível concluir a solicitação.";
$language["DB_SETTINGS"]="Configurações da base de dados";
$language["DEAD_ONLY"]="Apenas Inativos";
$language["DELETE"]="Apagar";
$language["DELETE_ALL_READED"]="Apagar todos lidos";
$language["DELETE_CONFIRM"]="Tem certeza de que deseja apagar / remover isto?";
$language["DELETE_TORRENT"]="Apagar Torrent";
$language["DELFAILED"]="Falha ao apagar";
$language["DESCRIPTION"]="Descrição";
$language["DONT_NEED_CHANGE"]="Você não precisa alterar essas configurações!";
$language["DOWN"]="Dl";
$language["DOWNLOAD"]="Download";
$language["DOWNLOAD_TORRENT"]="Download Torrent";
$language["DOWNLOADED"]="Downloaded";
$language["EDIT"]="Editar";
$language["EDIT_LANGUAGE"]="Editar Idioma";
$language["EDIT_POST"]="Editar Mensagem";
$language["EDIT_TORRENT"]="Editar Torrent";
$language["EMAIL"]="Email";
$language["EMAIL_SENT"]="Um e-mail foi enviado para o endereço de e-mail indicado<br />Clicar no link incluído para confirmar sua conta.";
$language["EMAIL_VERIFY"]="Conta de e-mail atualizada em $SITENAME";
$language["EMAIL_VERIFY_BLOCK"]="Verificação de e-mail enviado";
$language["EMAIL_VERIFY_MSG"]="Olá,\n\nEste e-mail foi enviado por você ter solicitado a alteração do endereço de e-mail atualmente detidas em seu registro, clique no link abaixo para completar a mudança.\n\nSaudações de toda staff.";
$language["EMAIL_VERIFY_SENT1"]="<br /><center>Um e-mail de confirmação foi enviado para:<br /><br /><strong><font color=\"red\">";
$language["EMAIL_VERIFY_SENT2"]="</font></strong><br /><br />Você precisará clicar no link contido no e-mail<br />Para atualizar o seu endereço de e-mail. O e-mail deve chegar dentro de 10 minutos<br />(Normalmente instantaneamente), embora alguns provedores e-mail que podem marcar como SPAM(Lixo Eletrônico)<br />Por isso não deixe de verificar sua pasta de spam(Lixo Eletrônico) se você não consegue encontrá-lo.<br /><br />";
$language["ERR_500"]="HTTP/1.0 500 Acesso não autorizado!";
$language["ERR_AVATAR_EXT"]="Lamentamos apenas gif, jpg, png bmp são permitido";
$language["ERR_BAD_LAST_POST"]="";
$language["ERR_BAD_NEWS_ID"]="Más notícias ID ruim!";
$language["ERR_BODY_EMPTY"]="Campo não pode estar vazia!";
$language["ERR_CANT_CONNECT"]="Não é possível conectar ao servidor local MySQL";
$language["ERR_CANT_OPEN_DB"]="Não é possível abrir o base de dados";
$language["ERR_DB_ERR"]="Erro banco de dados. Por favor entre em contato com o administrador sobre isto.";
$language["ERR_DELETE_POST"]="Apagar mensagem. Sanity check: Você está prestes a apagar uma mensagem. Clique";
$language["ERR_DELETE_TOPIC"]="Apagar tópico. Sanity check: Você está prestes a apagar um tópico. Clique";
$language["ERR_EMAIL_ALREADY_EXISTS"]="Este e-mail já está em nosso banco de dados!";
$language["ERR_EMAIL_NOT_FOUND_1"]="O endereço de e-mail";
$language["ERR_EMAIL_NOT_FOUND_2"]="Não foi encontrado no banco de dados.";
$language["ERR_ENTER_NEW_TITLE"]="Você deve inserir um novo título!";
$language["ERR_FORUM_NOT_FOUND"]="Fórum não encontrado";
$language["ERR_FORUM_UNKW_ACT"]="Erro Fórum: ação Desconhecida";
$language["ERR_GUEST_EXISTS"]="'Guest' É um usuário restrito. Você não pode registar-se como 'Guest'";
$language["ERR_IMAGE_CODE"]="O código de segurança não corresponde";
$language["ERR_INS_TITLE_NEWS"]="Você deve inserir tanto título E notícia";
$language["ERR_INV_NUM_FIELD"]="Numérico inválido campo (s) do cliente";
$language["ERR_INVALID_CLIENT_EVENT"]="Evento inválido = Do cliente.";
$language["ERR_INVALID_INFO_BT_CLIENT"]="Informações inválidas recebidas do cliente BitTorrent";
$language["ERR_INVALID_IP_NUMB"]="Endereço IP inválido. Deve ser normalizado pontilhada decimal (nomes de host não é permitido)";
$language["ERR_LEVEL"]="Desculpe, o seu rank ";
$language["ERR_LEVEL_CANT_POST"]="Você não está autorizado a postar neste fórum.";
$language["ERR_LEVEL_CANT_VIEW"]="Você não está autorizado a ver este tópico.";
$language["ERR_MISSING_DATA"]="Faltam dados!";
$language["ERR_MUST_BE_LOGGED_SHOUT"]="Você precisa estar logado para enviar mensagens...";
$language["ERR_NO_BODY"]="Nenhum texto";
$language["ERR_NO_NEWS_ID"]="Não encontrou Nova ID!";
$language["ERR_NO_POST_WITH_ID"]="Nenhum post com este ID";
$language["ERR_NO_SPACE"]="Seu nome de usuário não pode conter espaço, por favor substitua com um sublinhado por exemplo,:<br /><br />";
$language["ERR_NO_TOPIC_ID"]="Nenhum tópico ID retornado";
$language["ERR_NO_TOPIC_POST_ID"]="Nenhum tópico associado com este ID";
$language["ERR_NOT_AUTH"]="Você não está autorizado!";
$language["ERR_NOT_FOUND"]="Não encontrado...";
$language["ERR_NOT_PERMITED"]="Não e Permitido";
$language["ERR_PASS_LENGTH"]="<font color=\"black\">A senha deve ter um mínimo de 4 caracteres.</font>";
$language["ERR_PASSWORD_INCORRECT"]="Senha Incorreta";
$language["ERR_PERM_DENIED"]="Permissão negada";
$language["ERR_PID_NOT_FOUND"]="Por favor baixe o torrent novamente. O sistema PID está ativo e não foi encontrado pid  no torrent";
$language["ERR_RETR_DATA"]="Erro de dados!";
$language["ERR_SEND_EMAIL"]="Não é possível enviar e-mails. Entre em contato com o administrador sobre este erro.";
$language["ERR_SERVER_LOAD"]="A carga do servidor esta muito alta no momento. Repetindo, aguarde...";
$language["ERR_SPECIAL_CHAR"]="<font color=\"black\">Seu nome de usuário não pode conter caracteres especiais como:<br /><br /><font color=\"red\"><strong>* ? < > @ $ & % etc.</strong></font></font><br />";
$language["ERR_SQL_ERR"]="Erro SQL";
$language["ERR_SUBJECT"]="Você deve digitar um assunto.";
$language["ERR_TOPIC_ID_NA"]="Topic ID is N/A";
$language["ERR_TOPIC_LOCKED"]="Tópico esta Trancado";
$language["ERR_TORRENT_IN_BROWSER"]="Este arquivo é para clientes BitTorrent.";
$language["ERR_UPDATE_USER"]="Não foi possível atualizar os dados do usuário. Entre em contato com o administrador sobre este erro.";
$language["ERR_USER_ALREADY_EXISTS"]="Já existe um usuário com esse nick!";
$language["ERR_USER_NOT_FOUND"]="Desculpe, Usuário não encontrado";
$language["ERR_USER_NOT_USER"]="Você não está autorizado acessar painel de outro usuário!";
$language["ERR_USERNAME_INCORRECT"]="Nome do usuário incorreto";
$language["ERROR"]="Erro";
$language["ERROR_ID"]="Erro de ID";
$language["FACOLTATIVE"]="Opcional";
$language["FILE"]="Arquivo";
$language["FILE_CONTENTS"]="Conteúdo do Arquivo";
$language["FILE_NAME"]="Nome do Arquivo";
$language["FIND_USER"]="Procurar Usuário";
$language["FINISHED"]="Concluído";
$language["FORUM"]="Fórum";
$language["FORUM_ERROR"]="Erro do Fórum";
$language["FORUM_INFO"]="Info. Fórum";
$language["FORUM_MIN_CREATE"]="Rank Minimo que pode criar Fórum";
$language["FORUM_MIN_READ"]="Rank Minimo que pode Ler Fórum";
$language["FORUM_SEARCH"]="Buscar no Fórum";
$language["FORUM_N_TOPICS"]="N. Tópicos";
$language["FORUM_N_POSTS"]="N. Mensagens";
$language["FRM_DELETE"]="Apagar";
$language["FRM_LOGIN"]="Entrar";
$language["FRM_PREVIEW"]="Prever";
$language["FRM_REFRESH"]="Atualizar";
$language["FRM_RESET"]="Restaurar";
$language["FRM_SEND"]="Enviar";
$language["FRM_CONFIRM"]="Confirmar";
$language["FRM_CANCEL"]="Cancelar";
$language["FRM_CLEAN"]="Limpar";
$language["GLOBAL_SERVER_LOAD"]="Servidor Global iniciado (Todos os websites sobre o atual servidor)";
$language["GO"]="Ir";
$language["GROUP"]="Grupo";
$language["GUEST"]="Visitante";
$language["GUESTS"]="Visitantes";
$language["HERE"]="Aqui";
$language["HISTORY"]="Histórico";
$language["HOME"]="Inicio";
$language["IF_YOU_ARE_SURE"]="Você tem certeza.";
$language["IM_SURE"]="Estou certo";
$language["IN"]="em";
$language["INF_CHANGED"]="Informações mudada!";
$language["INFINITE"]="Infinito";
$language["INFO_HASH"]="Info. Hash";
$language["INS_NEW_PWD"]="Inserir NOVA senha!";
$language["INS_OLD_PWD"]="Inserir senha ANTIGA!";
$language["INSERT_DATA"]="Insira todos os dados necessários para o upload.";
$language["INSERT_NEW_FORUM"]="Inserir novo fórum";
$language["INVALID_ID"]="Se trata de um ID inválido. Desculpe!";
$language["INVALID_INFO_HASH"]="Info hash valor inválido.";
$language["INVALID_PID"]="PID Inválido";
$language["INVALID_TORRENT"]="Erro Tracker: torrent inválido";
$language["KEYWORDS"]="Palavras-chave";
$language["LAST_EXTERNAL"]="Última Atualização de Torrents Externos foi feito em ";
$language["LAST_NEWS"]="Últimas Notíciass";
$language["LAST_POST_BY"]="Última mensagem por";
$language["LAST_SANITY"]="Última Check Sanity foi feito em ";
$language["LAST_TORRENTS"]="últimos Torrents";
$language["LAST_UPDATE"]="Última Atualização";
$language["LASTPOST"]="Última mensagem";
$language["LEECHERS"]="leechers";
$language["LEFT"]="Esquerda";
$language["LOGIN"]="Entrar";
$language["LOGOUT"]="Sair";
$language["MAILBOX"]="Caixa de Entrada";
$language["MANAGE_NEWS"]="Gerenciar Notícias";
$language["MEMBER"]="Usuário";
$language["MEMBERS"]="Usuários";
$language["MEMBERS_LIST"]="Lista de Usuários";
$language["MINIMUM_100_DOWN"]="(Com o mínimo 100 MB baixado)";
$language["MINIMUM_5_LEECH"]="com o minimo de 5 leechers, nao incluindo torrents inativos";
$language["MINIMUM_5_SEED"]="com minimo de 5 seeders";
$language["MKTOR_INVALID_HASH"]="Fazer Torrent: Recebido hash inválido";
$language["MNU_ADMINCP"]="Painel Admin";
$language["MNU_FORUM"]="Fórum";
$language["MNU_INDEX"]="Inicio";
$language["MNU_MEMBERS"]="Membros";
$language["MNU_NEWS"]="Notícias";
$language["MNU_STATS"]="Estatisticas";
$language["MNU_TORRENT"]="Torrents";
$language["MNU_UCP_CHANGEPWD"]="Alterar Senha";
$language["MNU_UCP_HOME"]="Painel de controle do usuário";
$language["MNU_UCP_IN"]="Caixa de Entrada";
$language["MNU_UCP_INFO"]="Alterar perfil";
$language["MNU_UCP_NEWPM"]="Nova mensagem";
$language["MNU_UCP_OUT"]="Caixa de Saída";
$language["MNU_UCP_PM"]="Caixa de Entrada ";
$language["MNU_UPLOAD"]="Upload";
$language["MORE_SMILES"]="Mais Emoticons";
$language["MORE_THAN"]="Mais de ";
$language["MORE_THAN_2"]="Itens encontrados, mostrando primeiro";
$language["NA"]="N/A";
$language["NAME"]="Nome";
$language["NEED_COOKIES"]="Nota: Você precisa cookies ativados para entrar.";
$language["NEW_COMMENT"]="Insira o seu comentário...";
$language["NEW_COMMENT_T"]="Novo Comentário";
$language["NEWS"]="AS Notícias";
$language["NEWS_DESCRIPTION"]="Notícias:";
$language["NEWS_INSERT"]="Insira sua Notícia";
$language["NEWS_PANEL"]="Novo Painel";
$language["NEWS_TITLE"]="Titulo:";
$language["NEXT"]="Próxima";
$language["NO"]="Não";
$language["NO_BANNED_IPS"]="Não há IP banido";
$language["NO_COMMENTS"]="Sem Comentários...";
$language["NO_FORUMS"]="Nenhum Fórum encontrado!";
$language["NO_MAIL"]="Você não tem nenhum e-mail novo.";
$language["NO_MESSAGES"]="Nenhum PM encontrado...";
$language["NO_NEWS"]="Sem Notícias";
$language["NO_PEERS"]="Sem peers";
$language["NO_RECORDS"]="Infelizmente, a lista está vazia...";
$language["NO_TOPIC"]="Nenhum tópicos encontrados";
$language["NO_TORR_UP_USER"]="Nenhum torrents enviado por este usuário";
$language["NO_TORRENTS"]="Nenhum torrents aqui...";
$language["NO_USERS_FOUND"]="Nenhum usuário encontrado!";
$language["NOBODY_ONLINE"]="Ninguém online";
$language["NONE"]="Nenhum";
$language["NOT_ADMIN_CP_ACCESS"]="Você não está autorizado a acessar o painel admin!";
$language["NOT_ALLOW_DOWN"]="Não é permitido fazer o download de";
$language["NOT_AUTH_DOWNLOAD"]="Você não está autorizado para fazer o download. Desculpe...";
$language["NOT_AUTH_VIEW_NEWS"]="Você não está autorizado para visualizar a notícia!";
$language["NOT_AUTHORIZED"]="Você não está autorizado a visualizar o";
$language["NOT_AUTHORIZED_UPLOAD"]="Você não está autorizado a fazer upload!";
$language["NOT_AVAILABLE"]="N/A";
$language["NOT_MAIL_IN_URL"]="Este não é o endereço de e-mail que foi neste url";
$language["NOT_POSS_RESET_PID"]="Não é possível redefinir a sua PID! <br />Contactar um admin...";
$language["NOW_LOGIN"]="Agora, você será perguntado para entrar";
$language["NUMBER_SHORT"]="#";
$language["OLD_PWD"]="Senha antiga";
$language["ONLY_REG_COMMENT"]="Somente usuários registrados podem inserir comentários!";
$language["OPT_DB_RES"]="resultado da otimização do banco de dados";
$language["OPTION"]="Opção";
$language["PASS_RESET_CONF"]="Redefinição de senha e confirmação";
$language["PEER_CLIENT"]="Cliente";
$language["PEER_COUNTRY"]="País";
$language["PEER_ID"]="Peer ID";
$language["PEER_LIST"]="Lista de Peers";
$language["PEER_PORT"]="Porta";
$language["PEER_PROGRESS"]="Progresso";
$language["PEER_STATUS"]="Status";
$language["PEERS"]="peers";
$language["PEERS_DETAILS"]="Clique aqui para ver detalhes dos peers";
$language["PICTURE"]="Foto";
$language["PID"]="PID";
$language["PLEASE_WAIT"]="Aguarde...";
$language["PM"]="PM";
$language["POSITION"]="Posição";
$language["POST_REPLY"]="Responder";
$language["POSTED_BY"]="Postado por";
$language["POSTED_DATE"]="Postado em";
$language["POSTS"]="Mensagens";
$language["POSTS_PER_DAY"]="%s Mensagens por dia";
$language["POSTS_PER_PAGE"]="Mensagens por página";
$language["PREVIOUS"]="Prever";
$language["PRIVATE_MSG"]="Mensagem Privada";
$language["PWD_CHANGED"]="Senha Trocada!";
$language["QUESTION"]="Pergunta";
$language["QUICK_JUMP"]="Salto Rápido";
$language["QUOTE"]="Citar";
$language["RANK"]="Rank";
$language["RATIO"]="Ratio";
$language["REACHED_MAX_USERS"]="O número máximo de usuários já foi alcançado";
$language["READED"]="Lido";
$language["RECEIVER"]="Destinatario";
$language["RECOVER_DESC"]="Utilize o formulário abaixo para redefinir sua senha e  os detalhes da sua conta serão enviados de volta para você.<br />(Terá que responder a uma confirmação por e-mail.)";
$language["RECOVER_PWD"]="Recuperar senha";
$language["RECOVER_TITLE"]="Recuperar nome de usuário ou senha perdida";
$language["REDIRECT"]="Se o seu navegador não tem o javascript ativado, clique";
$language["REDOWNLOAD_TORR_FROM"]="Baixar torrente novamente de";
$language["REGISTERED"]="Registrado";
$language["REGISTERED_EMAIL"]="Email Registrado";
$language["REMOVE"]="Remover";
$language["REPLIES"]="Respostas";
$language["REPLY"]="Responder";
$language["RESULT"]="Resultado";
$language["RETRY"]="Repetir";
$language["RETURN_TORRENTS"]="Voltar à lista de torrent";
$language["REVERIFY_CONGRATS1"]="<center><br />Parabéns, seu e-mail foi verificado e alterado com êxito<br /><br /><strong>From: <font color=\"red\">";
$language["REVERIFY_CONGRATS2"]="</strong></font><br /><strong>To: <font color=\"red\">";
$language["REVERIFY_CONGRATS3"]="</strong></font><br /><br />";
$language["REVERIFY_FAILURE"]="<center><br /><strong><font color=\"red\"><u>Desculpe, mas esta URL não é válida</u></strong></font><br /><br />Um novo número aleatório é gerado cada vez que você tentar alterar seu e-mail<br />Se você está vendo esta mensagem e provável que você tentou mudar seu e-mail<br />Mais de uma vez e você esta usando uma url velha.<br /><br /><strong>Aguarde até que você esteja absolutamente certo de que você não tenha recebido o novo<br />E-mail de confirmação antes de tentar alterar seu e-mail novamente.</strong><br /><br />";
$language["REVERIFY_MSG"]="Ao tentar mudar o endereço de email um link será enviado para verificar se este é realmente o email que você deseja..<br /><br /><font color=\"red\"><strong>O endereço de e-mail no seu registro, não atualizara até você confirmar o novo endereço, clicando no link.</strong></font>";
$language["RIGHT"]="Direita";
$language["SEARCH"]="Procurar";
$language["SEEDERS"]="seeds";
$language["SEEN"]="Visto";
$language["SELECT"]="Selecione...";
$language["SENDER"]="Remetente";
$language["SENT_ERROR"]="Erro Enviado";
$language["SHORT_C"]="C"; //Shortname for Completed
$language["SHORT_L"]="L"; //Shortname for Leechers
$language["SHORT_S"]="S"; //Shortname for Seeders
$language["SHOUTBOX"]="Caixa de Mensagens";
$language["SIZE"]="Tamanho";
$language["SORRY"]="Desculpe";
$language["SORTID"]="Sortido";
$language["SPEED"]="Ratio";
$language["STICKY"]="Fixo";
$language["SUB_CATEGORY"]="Sub-Categoria";
$language["SUBJECT"]="Assunto";
$language["SUBJECT_MAX_CHAR"]="O Assunto é limitado a ";
$language["SUC_POST_SUC_EDIT"]="Post foi editado com sucesso.";
$language["SUC_SEND_EMAIL"]="A confirmação por e-mail foi enviado para";
$language["SUC_SEND_EMAIL_2"]="Aguarde alguns minutos para o e-mail chegar.";
$language["SUCCESS"]="Sucesso";
$language["SUMADD_BUG"]="Bug do Tracker chamando adicionar síntese";
$language["TABLE_NAME"]="Nome da Tabela";
$language["TIMEZONE"]="Fuso horário";
$language["TITLE"]="Título";
$language["TOP"]="Topo";
$language["TOP_10_ACTIVE"]="10 Torrents mais ativos";
$language["TOP_10_BEST_SEED"]="10 Torrents Melhores semeadores";
$language["TOP_10_BSPEED"]="10 torrentes melhor velocidade";
$language["TOP_10_DOWNLOAD"]="Top 10 Downloaders";
$language["TOP_10_SHARE"]="Top 10 Melhores Compartilhadores";
$language["TOP_10_UPLOAD"]="Top 10 Uploaders";
$language["TOP_10_WORST"]="Top 10 de Piores Compartilhadores";
$language["TOP_10_WORST_SEED"]="10 torrents pior Seeders";
$language["TOP_10_WSPEED"]="10 torrents pior velocidade";
$language["TOP_TORRENTS"]="Torrents mais Popular";
$language["TOPIC"]="Tópico";
$language["TOPICS"]="Tópicos";
$language["TOPICS_PER_PAGE"]="Tópicos por página";
$language["TORR_PEER_DETAILS"]="Torrent,Detalhes dos peers";
$language["TORRENT"]="Torrent";
$language["TORRENT_ANONYMOUS"]="Enviar como anónimo";
$language["TORRENT_CHECK"]="Permitir o tracker para recuperar e utilizar informações do arquivo torrent.";
$language["TORRENT_DETAIL"]="Detalhes dos Torrents";
$language["TORRENT_FILE"]="Arquivo Torrent";
$language["TORRENT_SEARCH"]="Procurar Torrents";
$language["TORRENT_STATUS"]="Status";
$language["TORRENT_UPDATE"]="Atualizando, aguarde...";
$language["TORRENTS"]="torrents";
$language["TORRENTS_PER_PAGE"]="Torrents por pagina";
$language["TRACK_DB_ERR"]="Tracker /erro na base de dados . Os detalhes do erro estão no log.";
$language["TRACKER_INFO"]="$users usuários, Monitoramento $torrents torrents ($seeds seeds e $leechers leechers, $percent%)";
$language["TRACKER_LOAD"]="Carga do Tracker";
$language["TRACKER_SETTINGS"]="Configurações do Tracker";
$language["TRACKER_STATS"]="Estatisticas do Tracker";
$language["TRACKING"]="Monitoramento";
$language["TRAFFIC"]="Tráfego";
$language["UCP_NOTE_1"]="Aqui você pode controlar a sua caixa de entrada, escrever PM para outros usuários,";
$language["UCP_NOTE_2"]="Controlar e modificar suas configurações, etc...";
$language["UNAUTH_IP"]="Endereço de IP não autorizado.";
$language["UNKNOWN"]="Desconhecido";
$language["UPDATE"]="Atualização";
$language["UPFAILED"]="Upload Falhou";
$language["UPLOAD_IMAGE"]="Upload Imagem";
$language["UPLOAD_LANGUAGE_FILE"]="Upload arquivo de Idioma";
$language["UPLOADED"]="Enviado";
$language["UPLOADER"]="Uploader";
$language["UPLOADS"]="Uploads";
$language["URL"]="URL";
$language["USER_CP"]="Meu Painel";
$language["USER_CP_1"]="Painel de Controle";
$language["USER_DETAILS"]="Detalhes do Usuário";
$language["USER_EMAIL"]="Email Válido";
$language["USER_ID"]="ID do Usuário";
$language["USER_JOINED"]="Registrado em";
$language["USER_LASTACCESS"]="Último acesso";
$language["USER_LEVEL"]="Rank";
$language["USER_LOCAL_TIME"]="Hora local do usuário";
$language["USER_NAME"]="Usuário";
$language["USER_PASS_RECOVER"]="Senha/Usuário Recuperar";
$language["USER_PWD"]="Senha";
$language["USERS_SEARCH"]="Procurar Usuários";
$language["VIEW_DETAILS"]="Ver detalhes";
$language["VIEW_TOPIC"]="Ver Tópico";
$language["VIEW_UNREAD"]="Ver não lidos";
$language["VIEWS"]="Exibições";
$language["VISITOR"]="Visitante";
$language["VISITORS"]="Visitantes";
$language["WAIT_ADMIN_VALID"]="Você deve esperar validação do administrador...";
$language["WARNING"]="Aviso!";
$language["WELCOME"]="Bem-vindo";
$language["WELCOME_ADMINCP"]="Bem-vindo ao Painel de Controle Admin";
$language["WELCOME_BACK"]="Bem-vindo de volta";
$language["WELCOME_UCP"]="Bem-vindo ao seu Painel de Controle";
$language["WORD_AND"]="E";
$language["WORD_NEW"]="Novo";
$language["WROTE"]="Escrever";
$language["WT"]="WT";
$language["X_TIMES"]="Vezes";
$language["YES"]="Sim";
$language["LAST_IP"]="Último IP";
$language["FIRST_UNREAD"]="Ir para o primeiro post não lido";
$language["MODULE_UNACTIVE"]="O módulo exigido não está ativo!";
$language["MODULE_NOT_PRESENT"]="O módulo exigido não existe!";
$language["MODULE_LOAD_ERROR"]="O módulo exigido parece ser errado!";
// begin modification
// hack: Signature on (Internal) Forum
// operation #0

$language["SIGNATURE"]="Assinatura no Fórum";

// end modification
// hack: Signature on (Internal) Forum
// operation #0
