"use client"
import {useRef} from 'react';
import {Button} from "@chakra-ui/button";
import {useDisclosure} from "@chakra-ui/hooks";
import {
    Drawer,
    DrawerBody,
    DrawerCloseButton,
    DrawerContent,
    DrawerFooter,
    DrawerHeader,
    DrawerOverlay
} from "@chakra-ui/modal";
import {HamburgerIcon} from "@chakra-ui/icons";
import Sidebar from "@/components/layouts/components/Sidebar";
import classNames from "classnames";


interface IMobileSidebar{
    className?: string;
}
export default function MobileSidebar( props: IMobileSidebar  ){

    const { isOpen, onOpen, onClose } = useDisclosure()
    const btnRef = useRef()

    return (
        <>

            <Button
                className={ classNames( props?.className, 'w-[1.5rem] max-w-[1.5rem] h-[1.5rem] pl-0 pr-0' ) }
                //@ts-ignore
                ref={btnRef} onClick={onOpen}>
                <HamburgerIcon />
            </Button>
            <Drawer
                isOpen={isOpen}
                placement='right'
                onClose={onClose}
                //@ts-ignore
                finalFocusRef={btnRef}
            >
                <DrawerOverlay />
                <DrawerContent>
                    <DrawerCloseButton />
                    <DrawerHeader>Menu</DrawerHeader>

                    <DrawerBody>
                        <Sidebar isMobile={true} />
                    </DrawerBody>

                    <DrawerFooter>
                        <Button variant='outline' mr={3} onClick={onClose}>
                            Cancel
                        </Button>
                    </DrawerFooter>
                </DrawerContent>
            </Drawer>
        </>
    )

}
