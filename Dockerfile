FROM owasp/zap2docker-stable

# WORKDIR /var/www


COPY --chown=zap . .

EXPOSE 8080

RUN chmod +x ./entrypoint.sh

CMD ["sh", "-c", "./entrypoint.sh"]
