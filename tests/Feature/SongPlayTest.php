<?php

namespace Tests\Feature;

use Tests\TestCase;

class SongPlayTest extends TestCase
{
    // #[Test]
    // public function play(): void
    // {
    //     $user = create_user();

    //     /** @var CompositeToken $token */
    //     $token = app(TokenManager::class)->createCompositeToken($user);

    //     /** @var Song $song */
    //     $song = Song::factory()->create([
    //         'path' => test_path('songs/blank.mp3'),
    //     ]);

    //     $this->mock(LocalStreamerAdapter::class)
    //         ->shouldReceive('stream')
    //         ->once();

    //     $this->get("play/{$song->id}?t=$token->audioToken")
    //         ->assertOk();
    // }

    // #[Test]
    // public function transcoding(): void
    // {
    //     config(['koel.streaming.transcode_flac' => true]);
    //     $user = create_user();

    //     /** @var CompositeToken $token */
    //     $token = app(TokenManager::class)->createCompositeToken($user);

    //     /** @var Song $song */
    //     $song = Song::factory()->create(['path' => test_path('songs/blank.mp3')]);

    //     File::partialMock()
    //         ->shouldReceive('mimeType')
    //         ->with($song->path)
    //         ->andReturn('audio/flac');

    //     $this->mock(TranscodingStreamerAdapter::class)
    //         ->shouldReceive('stream')
    //         ->once();

    //     $this->get("play/{$song->id}?t=$token->audioToken")
    //         ->assertOk();

    //     config(['koel.streaming.transcode_flac' => false]);
    // }

    // #[Test]
    // public function forceTranscoding(): void
    // {
    //     $user = create_user();

    //     /** @var CompositeToken $token */
    //     $token = app(TokenManager::class)->createCompositeToken($user);

    //     /** @var Song $song */
    //     $song = Song::factory()->create(['path' => test_path('songs/blank.mp3')]);

    //     $this->mock(TranscodingStreamerAdapter::class)
    //         ->shouldReceive('stream')
    //         ->once();

    //     $this->get("play/{$song->id}/1?t=$token->audioToken")
    //         ->assertOk();
    // }
}
