#!/bin/bash

zap.sh -daemon -host 0.0.0.0 -port 8080 -config api.disablekey=true -config database.recoverylog=false -config connection.timeoutInSecs=120 -config api.addrs.addr.name=.* -config api.addrs.addr.regex=true