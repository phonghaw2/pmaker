<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PatternLinkEnum extends Enum
{
    const X_URL             = '(?:https?:\/\/)?(?:www\.)?twitter\.com\/(.+)';
    const GITHUB_URL        = '(?:https?:\/\/)?(?:www\.)?github\.com\/(.+)';
    const PROFILE_MAKER_URL = '(?:https?:\/\/)?(?:www\.)?hashnode\.com\/(.+)';
    const YOUTUBE_URL       = '(?:https?:\/\/)?(?:www\.)?youtube\.com\/channel\/(.+)|(?:https?:\/\/)?(?:www\.)?youtube\.com\/c\/(.+)|(?:https?:\/\/)?(?:www\.)?youtube\.com\/@([a-zA-Z0-9._-]+)';
    const DAILY_URL         = '(https?):\/\/app\.daily\.dev\/(.+)';
    const LINKEDIN_URL      = '(?:https?:\/\/)?(?:www\.)?linkedin\.com\/in\/(.+)|(?:https?:\/\/)?(?:www\.)?linkedin\.com\/company\/(.+)';
    const FACEBOOK_URL      = '(?:https?:\/\/)?(?:www\.)?(mbasic.facebook|m\.facebook|facebook|fb)\.(com|me)\/(?:(?:\w\.)*#!\/)?(?:pages\/)?(?:[\w\-\.]*\/)*([\w\-\.]*)';
    const TWITCH_URL        = '(?:https?:\/\/)?(?:www\.)?twitch\.tv\/(.+)';
    const DISCORD_URL       = '(https:\/\/)?(www\.)?(((discord(app)?)?\.com\/invite)|((discord(app)?)?\.gg))\/(?<invite>.+)';
    const STEAM_URL         = '(?:https?:\/\/)?steamcommunity\.com\/(?:profiles|id)\/[a-zA-Z0-9]+';
    const INSTAGRAM_URL     = '(?:(?:http|https):\/\/)?(?:www.)?(?:instagram.com|instagr.am|instagr.com)\/(\w+)';
    const DRIBBBLE_URL      = '(?:https?:\/\/)?(?:www\.)?dribbble\.com\/(.+)';
    const TELEGRAM_URL      = '(?:|(https?:\/\/)?(?:www\.)?((t|telegram)\.me)\/)[a-zA-Z0-9_]{5,32}$';
    const REDDIT_URL        = '(?:https?:\/\/)?(?:www\.)?reddit\.com\/user\/(.+)';
    const GOODREADS_URL     = '(?:https?:\/\/)?(?:www\.)?goodreads\.com\/user\/show\/(.+)';
    const WHATSAPP_URL      = '(https?:\/\/)?chat\.whatsapp\.com\/(?:invite\/)?([a-zA-Z0-9_-]{22})$';

    const OR_SHORT_CUT  = '|^(\/(\w)*)';
    const WORD          = '^(\/(\w)*)';
    const FACEBOOK      = '^' . self::FACEBOOK_URL . self::OR_SHORT_CUT;
    const X             = '^' . self::X_URL . self::OR_SHORT_CUT;
    const GITHUB        = '^' . self::GITHUB_URL . self::OR_SHORT_CUT;
    const PROFILE_MAKER = '^' . self::PROFILE_MAKER_URL . self::OR_SHORT_CUT;
    const YOUTUBE       = '^' . self::YOUTUBE_URL . self::OR_SHORT_CUT;
    const DAILY         = '^' . self::DAILY_URL . self::OR_SHORT_CUT;
    const LINKEDIN      = '^' . self::LINKEDIN_URL . self::OR_SHORT_CUT;
    const TWITCH        = '^' . self::TWITCH_URL . self::OR_SHORT_CUT;
    const DISCORD       = '^' . self::DISCORD_URL;
    const STEAM         = '^' . self::STEAM_URL;
    const INSTAGRAM     = '^' . self::INSTAGRAM_URL . self::OR_SHORT_CUT;
    const DRIBBBLE      = '^' . self::DRIBBBLE_URL . self::OR_SHORT_CUT;
    const TELEGRAM      = '^' . self::TELEGRAM_URL . self::OR_SHORT_CUT;
    const REDDIT        = '^' . self::REDDIT_URL . self::OR_SHORT_CUT;
    const GOODREADS     = '^' . self::GOODREADS_URL . self::OR_SHORT_CUT;
    const WHATSAPP      = '^' . self::WHATSAPP_URL;
}
