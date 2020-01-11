# cafe hitech
 Teste criação de serviço de café por assinatura

## Alterações necessárias para o envio dos e-mails

Os arquivos a serem modificados devem se encontrar conforme abaixo.

### Arquivo: .env (na raiz do projeto)

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io 
MAIL_PORT=2525 (porta para comunicação com o provedor)
MAIL_USERNAME=null (seu usuário no provedor de email)
MAIL_PASSWORD=null (seu usuário no provedor de email)
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=emaildeorigem@email.com 
MAIL_FROM_NAME='Site Café Hitech'

```

### Arquivo: AssinaturaController.php (app/Http/Controllers)

```
Mail::to('emaildedestino@email.com')->send(new NovaAssinatura($name, $mail, $phone, $street, $number, $nb, $city, $state, $plan));

```
