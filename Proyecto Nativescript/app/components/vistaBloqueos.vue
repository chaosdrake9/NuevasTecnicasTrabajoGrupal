<template>
	<Page class="page">
		<ActionBar title="Bloqueador de Aplicaciones" class="action-bar" />
		<ScrollView>
			<StackLayout class="home-panel">
				<Label textWrap="true" text="Toca una App para bloquearla" class="h2 description-label" />     
                <ListView class="list-group" for="unaApp in properApps" @itemTap="onItemTap" style="height:1250px">
                <v-template>
                    <FlexboxLayout flexDirection="row" class="list-group-item">
                        <Image :src="unaApp.imageSrc" class="thumb img-circle" />
                        <Label :text="unaApp.name" class="list-group-item-heading" style="width: 60%" />
                        <Switch class="Switch" checked="false" @tap="onSwitch" />
                    </FlexboxLayout>
                </v-template>
                </ListView>
                <!--Add your page content here-->
				<Label textWrap="true" text="Bloquear todas" class="h2 description-label" />
                <Switch class="Switch" checked="false" @tap="onSwitch"/>
				<Button class="button" text="Hello there" @tap="onButtonTap" />
				<Label textWrap="true" :text="textFieldValue" class="h2 description-label" />
            </StackLayout>
        </ScrollView>
    </Page>
</template>

<script>
export default {
    methods: {
        onItemTap: function(args) {
            console.log("Item with index: " + args.index + " tapped");
        },

        onButtonTap() {
            this.textFieldValue = "General Kenobi";
        },
        onSwitch() {
            if (this.textFieldValue == "Bloqueado")
                this.textFieldValue = "Desbloqueado";
            else this.textFieldValue = "Bloqueado";
        }
    },

    data() {
        return {
            properApps: [
                {
                    name: "Snapchat",
                    imageSrc:
                        "https://png.icons8.com/color/1600/snapchat-circled-logo.png"
                },
                {
                    name: "WhatsApp",
                    imageSrc: "https://png.icons8.com/color/1600/whatsapp.png"
                },
                {
                    name: "Telegram",
                    imageSrc:
                        "https://png.icons8.com/color/1600/telegram-app.png"
                },
                {
                    name: "Instagram",
                    imageSrc:
                        "https://png.icons8.com/color/1600/instagram-new.png"
                },
                {
                    name: "Facebook",
                    imageSrc: "https://png.icons8.com/color/1600/facebook.png"
                },
                {
                    name: "Messenger",
                    imageSrc:
                        "https://png.icons8.com/color/1600/facebook-messenger.png"
                }
            ],

            textFieldValue: ""
        };
    }
};
</script>
