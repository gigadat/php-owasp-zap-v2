<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2016 the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Zap;

class Alert {
    public function __construct ($zap) {
		$this->zap = $zap;
	}

    /**
	 * Gets the alerts raised by ZAP, optionally filtering by URL and paginating with 'start' position and 'count' of alerts
	 */
    public function alerts($baseurl=NULL, $start=NULL, $count=NULL) {
        $params = array();
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        if ($start !== NULL) {
            $params['start'] = $start;
        }
        if ($count !== NULL) {
            $params['count'] = $count;
        }
        return $this->zap->request($this->zap->base . 'alert/view/alerts/', $params);
    }

    /**
	 * Gets the summary of alerts raised by ZAP, optionally filtering by URL and paginating with 'start' position and 'count' of alerts
	 */
    public function alertsSummary($baseurl=NULL) {
        $params = array();
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        return $this->zap->request($this->zap->base . 'alert/view/alertsSummary/', $params);
    }

    /**
	 * Gets the number of alerts, optionally filtering by URL
	 */
    public function numberOfAlerts($baseurl=NULL) {
        $params = array();
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        return $this->zap->request($this->zap->base . 'alert/view/numberOfAlerts/', $params);
    }
}
