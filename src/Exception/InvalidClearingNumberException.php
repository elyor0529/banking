<?php
/**
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://www.wtfpl.net/ for more details.
 */

namespace ledgr\banking\Exception;

/**
 * Exception thrown when a clearing number is unknown or invalid
 *
 * @author Hannes Forsgård <hannes.forsgard@fripost.org>
 */
class InvalidClearingNumberException extends InvalidAccountNumberException
{
}