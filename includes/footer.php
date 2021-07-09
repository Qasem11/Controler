
    <script>
      window.watsonAssistantChatOptions = {
        integrationID: "a50f794d-44fa-4268-a7b6-70f834cb837d", // The ID of this integration.
        region: "eu-de", // The region your integration is hosted in.
        serviceInstanceID: "f8110d28-f10b-411c-b5fb-67b71a197244", // The ID of your service instance.
        onLoad: function (instance) {
          instance.render();
        },
      };
      setTimeout(function () {
        const t = document.createElement("script");
        t.src =
          "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
        document.head.appendChild(t);
      });
    </script>

    <script src="./app/app.js"></script>
  </body>
</html>