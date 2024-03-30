<?php
namespace Ungureanu\SimpleLaravelWebauthn;
class WebAuthn
{
    public function __construct()
    {
    }
    private function generateChallenge(): string
    {
        return bin2hex(random_bytes(32));
    }

    public function getPublicKeyCredentialCreationOptions(string $username): array
    {
        $rp = [
            'id' => 'storyweaver.localhost',
            'name' => ENV('APP_NAME'),
        ];
        $user = [
            'id' => self::generateChallenge(),
            'email' => $username,
            'name' => explode('@', $username)[0], // Use part before '@' as name
            'displayName' => explode('@', $username)[0] // Use part before '@' as displayName
        ];
        $pubKeyCredParams = [
            [
                'type' => 'public-key',
                'alg' => -7 // ES256
            ],
            [
                'type' => 'public-key',
                'alg' => -257 // RS256
            ]
        ];
        $timeout = 60000;
        $excludeCredentials = [];
        $authenticatorSelection = [
            'authenticatorAttachment' => null,
            'requireResidentKey' => false,
            'userVerification' => 'preferred',
        ];
        $attestation = 'none';

        $challenge = self::generateChallenge();
        return [
                'rp' => $rp,
                'user' => $user,
                'challenge' => $challenge,
                'pubKeyCredParams' => $pubKeyCredParams,
                'timeout' => $timeout,
                'excludeCredentials' => $excludeCredentials,
                'authenticatorSelection' => $authenticatorSelection,
                'attestation' => $attestation
        ];
    }

    public function getPublicKeyCredentialRequestOptions(): array
    {
        $rpId = 'storyweaver.localhost';
        $challenge = self::generateChallenge();
        $allowCredentials = [];
        return [
            'rpId' => $rpId,
            'challenge' => $challenge,
            'timeout' => 60000,
            'allowCredentials' => $allowCredentials
        ];
    }
}
