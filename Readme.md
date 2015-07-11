# Brabs_NewsletterAPI

A simple Magento extension to expose the newsletter subscriptions table via the API.

## Usage

There is only one API call available currently which is a list of subscribers.

###SOAP V1

    $client->call($session, 'newsletter_subscribers.list', $params);

### SOAP V2

    $client->newsletterSubscriberList($session, $params);

### Filters

Filters can be applied to limit the returned results by Store ID and Subscriber Status.

#### Example

    $params = array('filter' => array(
        array('key' => 'store_id', 'value' => '1'),
        array('key' => 'subscriber_status', 'value' => '1')
    ));

Returns all subscribers from store_id 1 where subscriber_status is Subscribed

#### Subscription statuses

1. Subscribed
2. Not Activated
3. Unsubscribed
4. Unconfirmed

## License

TBC