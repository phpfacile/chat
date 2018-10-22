<?php
namespace PHPFacile\Chat\Service;

/**
 * This is a service to manage a given chat channel
 */
class ChatChannelService implements ChatChannelServiceInterface
{
    /**
     * Check whether the user is allowed to read or write to a given chat channel
     * This method is expected to be overwritten in the actual implementation
     *
     * @param string $userId    Id of the user
     * @param string $channelId Id of the channel
     * @param string $right     Either self::RIGHT_CHANNEL_MSG_READ
     *                          or self::RIGHT_CHANNEL_MSG_WRITE
     *
     * @return boolean          true if right is granted
     */
    public function isUserAllowedToAccessChannelMessages($userId, $channelId, $right)
    {
        return true;
    }
}
