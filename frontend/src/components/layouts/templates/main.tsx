import {ReactNode} from "react";
import Footer from "@/components/layouts/components/Footer";
import Sidebar from "@/components/layouts/components/Sidebar";
import History from "@/components/document/components/Controllers";

export default function MainTemplate({children}: {children: ReactNode}){


    return (
        <div className={'flex flex-col min-h-[100vh]'}>
            <div className={'flex-1 flex h-full w-full'}>
                <Sidebar></Sidebar>
                <main className={'w-full'}>
                    {children}
                </main>
                <History />
            </div>

            <Footer />
        </div>
    )

}