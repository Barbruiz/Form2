import smtplib
from email.mime.text import MIMEText

# Configuração do servidor SMTP
smtp_server = "smtp.gmail.com"
smtp_port = 587
username = "seuemail@gmail.com"
password = "suasenha"

# Criar o e-mail
to_email = "destinatario@example.com"
subject = "Confirmação de Venda"
html_content = """[COLE AQUI SEU CÓDIGO HTML]"""
msg = MIMEText(html_content, "html")
msg["Subject"] = subject
msg["From"] = username
msg["To"] = to_email

# Enviar o e-mail
try:
    server = smtplib.SMTP(smtp_server, smtp_port)
    server.starttls()
    server.login(username, password)
    server.sendmail(username, to_email, msg.as_string())
    print("E-mail enviado com sucesso!")
except Exception as e:
    print(f"Erro: {e}")
finally:
    server.quit()