<?php
namespace PHPFacile\Chat\Service;

interface ChatServiceInterface
{
    /**
     * Posts a message to a chat channel
     *
     * @param string $msg       Text of the message to be posted to the chat channel
     * @param string $channelId Id of the channel to post to
     * @param string $userId    Id of the user who post the message
     * @param array  $extraData Array of data to be stored/processed with the message
     *
     * @return void
     */
    public function addMessage($msg, $channelId, $userId, $extraData = []);

    /**
     * Returns all messages posted to a chat channel
     * (if the user is allowed to access to the chat channel)
     *
     * @param string $channelId Id of the channel
     * @param string $userId    Id of the user who want to get the messages
     *
     * @return array            Array of StdClass with attributes
     *                          ->id       Id of the message
     *                          ->user->id Id of the user who posted the message
     *                          ->text     Content of the message
     *                          ->insertionDateTimeUTC (string) Y-m-d H:i:s format
     */
    public function getMessages($channelId, $userId);

    /**
     * Returns the date/time in UTC of the last message posted in a given chat channel
     * by a given user
     *
     * @param string $channelId Id of the channel
     * @param string $userId    Id of the user who posted the messages
     *
     * @return string Y-m-d H:i:s format or null if there is no message
     */
    public function getLastUserMessageDateTimeUTC($channelId, $userId);
}
