<?php namespace JobApis\Jobs\Client\Queries;

class GoRemoteQuery extends AbstractQuery
{
    /**
     * GoRemote.io provides no search parameters, just
     * a feed of all their latest jobs via RSS.
     */

    /**
     * Get baseUrl
     *
     * @return  string Value of the base url to this api
     */
    public function getBaseUrl()
    {
        return 'https://goremote.io/rss';
    }

    /**
     * Get keyword
     *
     * @return  string Attribute being used as the search keyword
     */
    public function getKeyword()
    {
        return null;
    }
}
