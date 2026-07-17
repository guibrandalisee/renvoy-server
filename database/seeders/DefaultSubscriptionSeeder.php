<?php

namespace Database\Seeders;

use App\Models\DefaultGroup;
use App\Models\DefaultSubscription;
use Illuminate\Database\Seeder;
use LogicException;

class DefaultSubscriptionSeeder extends Seeder
{
    public function run(): void
    {
        $subscriptions = [
            ['netflix', 'Netflix', 'netflix.com', 'netflix', '#E50914', 'streaming'],
            ['prime-video', 'Prime Video', 'primevideo.com', 'asset:prime-video', '#00A8E1', 'streaming'],
            ['disney-plus', 'Disney+', 'disneyplus.com', 'asset:disney-plus', '#113CCF', 'streaming'],
            ['hbo-max', 'HBO Max', 'hbomax.com', 'hbomax', '#991EEB', 'streaming'],
            ['apple-tv-plus', 'Apple TV+', 'tv.apple.com', 'appletv', '#000000', 'streaming'],
            ['youtube-premium', 'YouTube Premium', 'youtube.com', 'youtube', '#FF0000', 'streaming'],
            ['crunchyroll', 'Crunchyroll', 'crunchyroll.com', 'crunchyroll', '#F47521', 'streaming'],
            ['paramount-plus', 'Paramount+', 'paramountplus.com', 'paramountplus', '#0064FF', 'streaming'],
            ['mubi', 'MUBI', 'mubi.com', 'mubi', '#000000', 'streaming'],
            ['dazn', 'DAZN', 'dazn.com', 'dazn', '#F8F8F5', 'streaming'],
            ['hulu', 'Hulu', 'hulu.com', 'asset:hulu', '#1CE783', 'streaming'],
            ['peacock', 'Peacock', 'peacocktv.com', 'asset:peacock', '#000000', 'streaming'],
            ['plex-pass', 'Plex Pass', 'plex.tv', 'plex', '#EBAF00', 'streaming'],
            ['globoplay', 'Globoplay', 'globoplay.globo.com', 'asset:globoplay', '#EE2E5D', 'streaming'],
            ['youtube-tv', 'YouTube TV', 'tv.youtube.com', 'youtubetv', '#FF0000', 'streaming'],

            ['twitch', 'Twitch', 'twitch.tv', 'twitch', '#9146FF', 'entertainment'],
            ['audible', 'Audible', 'audible.com', 'audible', '#F8991C', 'entertainment'],
            ['patreon', 'Patreon', 'patreon.com', 'patreon', '#000000', 'entertainment'],
            ['snapchat-plus', 'Snapchat+', 'snapchat.com', 'snapchat', '#FFFC00', 'entertainment'],
            ['onlyfans', 'OnlyFans', 'onlyfans.com', 'onlyfans', '#00AFF0', 'entertainment'],
            ['amazon-prime', 'Amazon Prime', 'amazon.com/prime', 'asset:amazon-prime', '#00A8E1', 'entertainment'],
            ['meli-plus', 'Meli+', 'mercadolivre.com.br', 'asset:meli-plus', '#FFE600', 'entertainment'],
            ['apple-one', 'Apple One', 'apple.com/apple-one', 'apple', '#000000', 'entertainment'],

            ['spotify', 'Spotify', 'spotify.com', 'spotify', '#1DB954', 'music'],
            ['apple-music', 'Apple Music', 'music.apple.com', 'applemusic', '#FA243C', 'music'],
            ['youtube-music', 'YouTube Music', 'music.youtube.com', 'youtubemusic', '#FF0000', 'music'],
            ['deezer', 'Deezer', 'deezer.com', 'deezer', '#A238FF', 'music'],
            ['tidal', 'TIDAL', 'tidal.com', 'tidal', '#000000', 'music'],
            ['soundcloud', 'SoundCloud', 'soundcloud.com', 'soundcloud', '#FF5500', 'music'],
            ['amazon-music', 'Amazon Music', 'music.amazon.com', 'asset:amazon-music', '#46C3D0', 'music'],

            ['playstation-plus', 'PlayStation Plus', 'playstation.com', 'playstation', '#003791', 'games'],
            ['xbox-game-pass', 'Xbox Game Pass', 'xbox.com', 'asset:xbox-game-pass', '#107C10', 'games'],
            ['nintendo-switch-online', 'Nintendo Switch Online', 'nintendo.com', 'asset:nintendo-switch-online', '#E60012', 'games'],
            ['ea-play', 'EA Play', 'ea.com', 'ea', '#000000', 'games'],
            ['ubisoft-plus', 'Ubisoft+', 'ubisoft.com', 'ubisoft', '#000000', 'games'],
            ['geforce-now', 'GeForce NOW', 'nvidia.com', 'nvidia', '#76B900', 'games'],
            ['discord-nitro', 'Discord Nitro', 'discord.com', 'discord', '#5865F2', 'games'],
            ['apple-arcade', 'Apple Arcade', 'apple.com', 'applearcade', '#000000', 'games'],
            ['google-play-pass', 'Google Play Pass', 'play.google.com', 'googleplay', '#01875F', 'games'],

            ['google-one', 'Google One', 'one.google.com', 'asset:google-one', '#4285F4', 'utilities'],
            ['icloud-plus', 'iCloud+', 'icloud.com', 'icloud', '#3693F3', 'utilities'],
            ['1password', '1Password', '1password.com', 'n1password', '#3B66BC', 'utilities'],
            ['lastpass', 'LastPass', 'lastpass.com', 'lastpass', '#D32D27', 'utilities'],
            ['dashlane', 'Dashlane', 'dashlane.com', 'dashlane', '#0E353D', 'utilities'],
            ['nordvpn', 'NordVPN', 'nordvpn.com', 'nordvpn', '#4687FF', 'utilities'],
            ['expressvpn', 'ExpressVPN', 'expressvpn.com', 'expressvpn', '#DA3940', 'utilities'],
            ['proton', 'Proton', 'proton.me', 'proton', '#6D4AFF', 'utilities'],
            ['telegram-premium', 'Telegram Premium', 'telegram.org', 'telegram', '#26A5E4', 'utilities'],
            ['bitwarden-premium', 'Bitwarden Premium', 'bitwarden.com', 'bitwarden', '#175DDC', 'utilities'],
            ['google-photos', 'Google Photos', 'photos.google.com', 'googlephotos', '#4285F4', 'utilities'],
            ['onedrive', 'Microsoft OneDrive', 'onedrive.live.com', 'asset:onedrive', '#0078D4', 'utilities'],

            ['dropbox', 'Dropbox', 'dropbox.com', 'dropbox', '#0061FF', 'work'],
            ['microsoft-365', 'Microsoft 365', 'microsoft365.com', 'asset:microsoft-365', '#D83B01', 'work'],
            ['notion', 'Notion', 'notion.so', 'notion', '#000000', 'work'],
            ['canva', 'Canva', 'canva.com', 'asset:canva', '#00C4CC', 'work'],
            ['adobe-creative-cloud', 'Adobe Creative Cloud', 'adobe.com', 'asset:adobe-creative-cloud', '#DA1F26', 'work'],
            ['chatgpt-plus', 'ChatGPT Plus', 'chatgpt.com', 'asset:chatgpt-plus', '#74AA9C', 'work'],
            ['claude', 'Claude', 'claude.ai', 'claude', '#D97757', 'work'],
            ['github-copilot', 'GitHub Copilot', 'github.com', 'githubcopilot', '#000000', 'work'],
            ['figma', 'Figma', 'figma.com', 'figma', '#F24E1E', 'work'],
            ['slack', 'Slack', 'slack.com', 'asset:slack', '#4A154B', 'work'],
            ['zoom', 'Zoom', 'zoom.us', 'zoom', '#0B5CFF', 'work'],
            ['evernote', 'Evernote', 'evernote.com', 'evernote', '#00A82D', 'work'],
            ['todoist', 'Todoist', 'todoist.com', 'todoist', '#E44332', 'work'],
            ['obsidian-sync', 'Obsidian Sync', 'obsidian.md', 'obsidian', '#7C3AED', 'work'],
            ['linkedin-premium', 'LinkedIn Premium', 'linkedin.com', 'asset:linkedin-premium', '#0A66C2', 'work'],
            ['google-workspace', 'Google Workspace', 'workspace.google.com', 'google', '#4285F4', 'work'],
            ['grammarly-pro', 'Grammarly Pro', 'grammarly.com', 'grammarly', '#15C39A', 'work'],
            ['linear', 'Linear', 'linear.app', 'linear', '#5E6AD2', 'work'],
            ['jira', 'Jira', 'atlassian.com/software/jira', 'jira', '#0052CC', 'work'],
            ['cursor-pro', 'Cursor Pro', 'cursor.com', 'cursor', '#000000', 'work'],
            ['perplexity-pro', 'Perplexity Pro', 'perplexity.ai', 'perplexity', '#20B2AA', 'work'],
            ['gemini-advanced', 'Gemini Advanced', 'gemini.google.com', 'googlegemini', '#4E82EE', 'work'],
            ['jetbrains', 'JetBrains', 'jetbrains.com', 'jetbrains', '#000000', 'work'],
            ['airtable', 'Airtable', 'airtable.com', 'airtable', '#18BFFF', 'work'],
            ['miro', 'Miro', 'miro.com', 'miro', '#FFD02F', 'work'],

            ['strava', 'Strava', 'strava.com', 'strava', '#FC4C02', 'health'],
            ['calm', 'Calm', 'calm.com', 'asset:calm', '#4599F7', 'health'],
            ['headspace', 'Headspace', 'headspace.com', 'headspace', '#F47D31', 'health'],
            ['myfitnesspal', 'MyFitnessPal', 'myfitnesspal.com', 'asset:myfitnesspal', '#0066EE', 'health'],
            ['fitbit-premium', 'Fitbit Premium', 'fitbit.com', 'fitbit', '#00B0B9', 'health'],
            ['peloton', 'Peloton', 'onepeloton.com', 'peloton', '#000000', 'health'],
            ['apple-fitness-plus', 'Apple Fitness+', 'apple.com/apple-fitness-plus', 'apple', '#FA243C', 'health'],
            ['alltrails-plus', 'AllTrails+', 'alltrails.com', 'alltrails', '#142800', 'health'],

            ['tinder', 'Tinder', 'tinder.com', 'tinder', '#FE3C72', 'dating'],
            ['bumble', 'Bumble', 'bumble.com', 'asset:bumble', '#FFC629', 'dating'],
            ['hinge', 'Hinge', 'hinge.co', 'asset:hinge', '#000000', 'dating'],
            ['grindr', 'Grindr', 'grindr.com', 'asset:grindr', '#FFCC00', 'dating'],
            ['badoo', 'Badoo', 'badoo.com', 'badoo', '#783BF9', 'dating'],

            ['duolingo', 'Duolingo', 'duolingo.com', 'duolingo', '#58CC02', 'education'],
            ['coursera', 'Coursera', 'coursera.org', 'coursera', '#0056D2', 'education'],
            ['udemy', 'Udemy', 'udemy.com', 'udemy', '#A435F0', 'education'],
            ['skillshare', 'Skillshare', 'skillshare.com', 'skillshare', '#00FF84', 'education'],
            ['masterclass', 'MasterClass', 'masterclass.com', 'asset:masterclass', '#000000', 'education'],
            ['babbel', 'Babbel', 'babbel.com', 'asset:babbel', '#FF7300', 'education'],

            ['medium', 'Medium', 'medium.com', 'medium', '#000000', 'news'],
            ['nytimes', 'The New York Times', 'nytimes.com', 'newyorktimes', '#000000', 'news'],
            ['kindle-unlimited', 'Kindle Unlimited', 'amazon.com', 'asset:kindle-unlimited', '#FF9900', 'news'],
            ['x-premium', 'X Premium', 'x.com', 'x', '#000000', 'news'],
            ['substack', 'Substack', 'substack.com', 'substack', '#FF6719', 'news'],
            ['apple-news-plus', 'Apple News+', 'apple.com/apple-news', 'applenews', '#FD415E', 'news'],
        ];

        $groupIds = DefaultGroup::query()->pluck('id', 'key');
        $rows = array_map(function (array $subscription, int $sort) use ($groupIds): array {
            [$slug, $name, $domain, $iconSlug, $color, $groupKey] = $subscription;

            if (trim($iconSlug) === '') {
                throw new LogicException("Default subscription [{$slug}] must have an icon.");
            }

            return compact('slug', 'name', 'domain', 'iconSlug', 'color', 'sort') + [
                'icon_slug' => $iconSlug,
                'manage_url' => null,
                'default_group_id' => $groupIds[$groupKey],
                'is_active' => true,
            ];
        }, $subscriptions, array_keys($subscriptions));

        foreach ($rows as &$row) {
            unset($row['iconSlug']);
        }
        unset($row);

        DefaultSubscription::query()->upsert($rows, ['slug'], ['name', 'domain', 'icon_slug', 'color', 'manage_url', 'default_group_id', 'is_active', 'sort']);
    }
}
