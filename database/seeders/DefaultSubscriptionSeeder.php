<?php

namespace Database\Seeders;

use App\Models\DefaultGroup;
use App\Models\DefaultSubscription;
use Illuminate\Database\Seeder;

class DefaultSubscriptionSeeder extends Seeder
{
    public function run(): void
    {
        $subscriptions = [
            ['netflix', 'Netflix', 'netflix.com', 'netflix', '#E50914', 'streaming'], ['prime-video', 'Prime Video', 'primevideo.com', null, '#00A8E1', 'streaming'], ['disney-plus', 'Disney+', 'disneyplus.com', null, '#113CCF', 'streaming'], ['hbo-max', 'HBO Max', 'hbomax.com', 'hbomax', '#991EEB', 'streaming'], ['apple-tv-plus', 'Apple TV+', 'tv.apple.com', 'appletv', '#000000', 'streaming'], ['youtube-premium', 'YouTube Premium', 'youtube.com', 'youtube', '#FF0000', 'streaming'], ['crunchyroll', 'Crunchyroll', 'crunchyroll.com', 'crunchyroll', '#F47521', 'streaming'], ['paramount-plus', 'Paramount+', 'paramountplus.com', 'paramountplus', '#0064FF', 'streaming'], ['mubi', 'MUBI', 'mubi.com', 'mubi', '#000000', 'streaming'], ['dazn', 'DAZN', 'dazn.com', 'dazn', '#F8F8F5', 'streaming'], ['hulu', 'Hulu', 'hulu.com', null, '#1CE783', 'streaming'], ['peacock', 'Peacock', 'peacocktv.com', null, '#000000', 'streaming'], ['plex-pass', 'Plex Pass', 'plex.tv', 'plex', '#EBAF00', 'streaming'], ['twitch', 'Twitch', 'twitch.tv', 'twitch', '#9146FF', 'entertainment'],
            ['spotify', 'Spotify', 'spotify.com', 'spotify', '#1DB954', 'music'], ['apple-music', 'Apple Music', 'music.apple.com', 'applemusic', '#FA243C', 'music'], ['youtube-music', 'YouTube Music', 'music.youtube.com', 'youtubemusic', '#FF0000', 'music'], ['deezer', 'Deezer', 'deezer.com', 'deezer', '#A238FF', 'music'], ['tidal', 'TIDAL', 'tidal.com', 'tidal', '#000000', 'music'], ['soundcloud', 'SoundCloud', 'soundcloud.com', 'soundcloud', '#FF5500', 'music'], ['amazon-music', 'Amazon Music', 'music.amazon.com', 'amazonmusic', '#46C3D0', 'music'], ['audible', 'Audible', 'audible.com', 'audible', '#F8991C', 'entertainment'],
            ['playstation-plus', 'PlayStation Plus', 'playstation.com', 'playstation', '#003791', 'games'], ['xbox-game-pass', 'Xbox Game Pass', 'xbox.com', null, '#107C10', 'games'], ['nintendo-switch-online', 'Nintendo Switch Online', 'nintendo.com', null, '#E60012', 'games'], ['ea-play', 'EA Play', 'ea.com', 'ea', '#000000', 'games'], ['ubisoft-plus', 'Ubisoft+', 'ubisoft.com', 'ubisoft', '#000000', 'games'], ['geforce-now', 'GeForce NOW', 'nvidia.com', 'nvidia', '#76B900', 'games'], ['discord-nitro', 'Discord Nitro', 'discord.com', 'discord', '#5865F2', 'games'], ['apple-arcade', 'Apple Arcade', 'apple.com', 'applearcade', '#000000', 'games'],
            ['google-one', 'Google One', 'one.google.com', null, '#4285F4', 'utilities'], ['icloud-plus', 'iCloud+', 'icloud.com', 'icloud', '#3693F3', 'utilities'], ['dropbox', 'Dropbox', 'dropbox.com', 'dropbox', '#0061FF', 'work'], ['microsoft-365', 'Microsoft 365', 'microsoft365.com', null, '#D83B01', 'work'], ['notion', 'Notion', 'notion.so', 'notion', '#000000', 'work'], ['canva', 'Canva', 'canva.com', null, '#00C4CC', 'work'], ['adobe-creative-cloud', 'Adobe Creative Cloud', 'adobe.com', null, '#DA1F26', 'work'], ['chatgpt-plus', 'ChatGPT Plus', 'chatgpt.com', null, '#74AA9C', 'work'], ['claude', 'Claude', 'claude.ai', 'claude', '#D97757', 'work'], ['github-copilot', 'GitHub Copilot', 'github.com', 'githubcopilot', '#000000', 'work'], ['figma', 'Figma', 'figma.com', 'figma', '#F24E1E', 'work'], ['slack', 'Slack', 'slack.com', null, '#4A154B', 'work'], ['zoom', 'Zoom', 'zoom.us', 'zoom', '#0B5CFF', 'work'], ['evernote', 'Evernote', 'evernote.com', 'evernote', '#00A82D', 'work'], ['todoist', 'Todoist', 'todoist.com', 'todoist', '#E44332', 'work'], ['obsidian-sync', 'Obsidian Sync', 'obsidian.md', 'obsidian', '#7C3AED', 'work'], ['linkedin-premium', 'LinkedIn Premium', 'linkedin.com', null, '#0A66C2', 'work'],
            ['1password', '1Password', '1password.com', '1password', '#3B66BC', 'utilities'], ['lastpass', 'LastPass', 'lastpass.com', 'lastpass', '#D32D27', 'utilities'], ['dashlane', 'Dashlane', 'dashlane.com', 'dashlane', '#0E353D', 'utilities'], ['nordvpn', 'NordVPN', 'nordvpn.com', 'nordvpn', '#4687FF', 'utilities'], ['expressvpn', 'ExpressVPN', 'expressvpn.com', 'expressvpn', '#DA3940', 'utilities'], ['proton', 'Proton', 'proton.me', 'proton', '#6D4AFF', 'utilities'], ['telegram-premium', 'Telegram Premium', 'telegram.org', 'telegram', '#26A5E4', 'utilities'],
            ['strava', 'Strava', 'strava.com', 'strava', '#FC4C02', 'health'], ['calm', 'Calm', 'calm.com', null, '#4599F7', 'health'], ['headspace', 'Headspace', 'headspace.com', 'headspace', '#F47D31', 'health'], ['myfitnesspal', 'MyFitnessPal', 'myfitnesspal.com', null, '#0066EE', 'health'], ['fitbit-premium', 'Fitbit Premium', 'fitbit.com', 'fitbit', '#00B0B9', 'health'], ['peloton', 'Peloton', 'onepeloton.com', 'peloton', '#000000', 'health'],
            ['tinder', 'Tinder', 'tinder.com', 'tinder', '#FE3C72', 'dating'], ['bumble', 'Bumble', 'bumble.com', null, '#FFC629', 'dating'], ['hinge', 'Hinge', 'hinge.co', null, '#000000', 'dating'], ['grindr', 'Grindr', 'grindr.com', null, '#FFCC00', 'dating'], ['badoo', 'Badoo', 'badoo.com', 'badoo', '#783BF9', 'dating'],
            ['duolingo', 'Duolingo', 'duolingo.com', 'duolingo', '#58CC02', 'education'], ['coursera', 'Coursera', 'coursera.org', 'coursera', '#0056D2', 'education'], ['udemy', 'Udemy', 'udemy.com', 'udemy', '#A435F0', 'education'], ['skillshare', 'Skillshare', 'skillshare.com', 'skillshare', '#00FF84', 'education'], ['masterclass', 'MasterClass', 'masterclass.com', null, '#000000', 'education'], ['babbel', 'Babbel', 'babbel.com', null, '#FF7300', 'education'],
            ['medium', 'Medium', 'medium.com', 'medium', '#000000', 'news'], ['nytimes', 'The New York Times', 'nytimes.com', 'newyorktimes', '#000000', 'news'], ['kindle-unlimited', 'Kindle Unlimited', 'amazon.com', null, '#FF9900', 'news'], ['x-premium', 'X Premium', 'x.com', 'x', '#000000', 'news'], ['patreon', 'Patreon', 'patreon.com', 'patreon', '#000000', 'entertainment'], ['snapchat-plus', 'Snapchat+', 'snapchat.com', 'snapchat', '#FFFC00', 'entertainment'], ['onlyfans', 'OnlyFans', 'onlyfans.com', 'onlyfans', '#00AFF0', 'entertainment'],
        ];

        $groupIds = DefaultGroup::query()->pluck('id', 'key');
        $rows = array_map(function (array $subscription, int $sort) use ($groupIds): array {
            [$slug, $name, $domain, $iconSlug, $color, $groupKey] = $subscription;

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
