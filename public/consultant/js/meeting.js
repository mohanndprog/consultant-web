function startMeeting(name, meetingId, apiKey, redirectOnLeave) {
    var script = document.createElement("script");
    script.type = "text/javascript";

    script.addEventListener("load", function (event) {
        const config = {
            name: name,
            meetingId: meetingId,
            apiKey: apiKey,
            containerId: null,

            // Mic and Camera

            micEnabled: true,
            webcamEnabled: true,
            participantCanToggleSelfWebcam: true,
            participantCanToggleSelfMic: true,

            // Poll

            pollEnabled: true,

            // Chat
            chatEnabled: true,

            // Raise Hand
            raiseHandEnabled: true,

            // ScreenShare
            screenShareEnabled: true,

            // Leave Meeting
            participantCanLeave: true,
            redirectOnLeave: redirectOnLeave,

            // Recording
            // recordingEnabled: true,
            // recordingWebhookUrl: "yourwebsite.com/callback",

            // White Board
            whiteboardEnabled: true,

            permissions: {
                askToJoin: false, // If false, then user will not be prompted for join the meeting

                // Mic and Camera
                toggleParticipantWebcam: true,
                toggleParticipantMic: true,

                removeParticipant: true, // Can remove participants

                // White Board
                drawOnWhiteboard: true,
                toggleWhiteboard: true,

                endMeeting: true, // End Meeting

                // toggleRecording: true, // Can toggle meeting recording
            },

            joinScreen: {
                visible: true,
                title: "Meeting Link",
                meetingUrl: location.href,
            },

            pin: {
                allowed: true,
                layout: "SPOTLIGHT",
            },
        };

        const meeting = new VideoSDKMeeting();
        meeting.init(config);
    });

    script.src =
        "https://sdk.videosdk.live/rtc-js-prebuilt/0.1.23/rtc-js-prebuilt.js";
    document.getElementsByTagName("head")[0].appendChild(script);
}
