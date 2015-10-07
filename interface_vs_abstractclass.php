<?php

    interface Provider {
        public function getAuthorizationUrl();
    }

    /**
    * Class AbstractProvider
    */
    abstract class AbtractProvider {
        public function related()
        {
        }
    }

    /**
    * Class FacebookProvider
    */
    class FacebookProvider {
        protected function getAuthorizationUrl()
        {
            return '';
        }
    }
