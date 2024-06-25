FROM zaproxy/zap-bare:2.15.0

# WORKDIR /var/www


COPY --chown=zap . .

EXPOSE 8080

RUN chmod +x ./entrypoint.sh

CMD ["sh", "-c", "./entrypoint.sh"]
