<?php

/**
 * @file
 * Rules Web Hooks - include file.
 */

/**
 * A remote endpoint type for rules web hooks.
 */
class RulesWebHooksEndpoint implements WSClientEndpointInterface {

  /**
   * @var WSClientServiceDescription
   */
  protected $service;

  protected $url;

  /**
   * @var RestClient
   */
  protected  $client;

  public function __construct(WSClientServiceDescription $service, $base_path = 'rules_web_hooks') {
    $this->service = $service;
    $this->url = $service->url . '/' . $base_path . '/';
  }

  public function client() {
    if (!isset($this->client)) {
      $this->client = new RestClient(NULL, new RestClientBaseFormatter(RestClientBaseFormatter::FORMAT_JSON));
      // Pass through additional curl options.
      if (!empty($this->service->settings['curl options'])) {
        $this->client->curlOpts = $this->service->settings['curl options'];
      }
      $this->client->curlOpts += variable_get('rules_web_hooks_custom_curl_options', array());
    }
    return $this->client;
  }

  /**
   * TODO: implement method body.
   */
  public function call($operation, $arguments) {

  }

  public function load($type, $id) {
    if (valid_url($url = $this->url . "$type/$id.json", TRUE)) {
      return (object)$this->client()->get($url);
    }
  }

  public function events() {
    return $this->client()->get($this->url . "rules_web_hook.json");
  }

  public function subscribe($event) {
    if (valid_url($url = $this->url . "rules_web_hook/$event/subscribe.json", TRUE)) {
      $this->client()->post($url, array(
         'url' => url('wsclient/' . $this->service->name . '/notify', array('absolute' => TRUE)),
         'http_auth' => wsclient_get_http_auth(),
         'token' => $this->service->token,
      ));
    }
  }

  public function unsubscribe($event) {
    if (valid_url($url = $this->url . "rules_web_hook/$event/unsubscribe.json", TRUE)) {
      $this->client()->post($url, array(
         'url' => url('wsclient/' . $this->service->name . '/notify', array('absolute' => TRUE)),
         'token' => $this->service->token,
      ));
    }
  }

  public function entities() {
    return $this->client()->get($this->url . 'entity_metadata.json');
  }

  public function actions() { }
  public function dataTypes() { }
  public function formAlter(&$form, &$form_state) { }
}