import HeaderBar from "@/components/layouts/components/HeaderBar";
import DocumentEditor from "@/components/document/components/DocumentEditor";
import ControlPanel from "@/components/document/components/ControlPanel";

export default function DashboardPage(){

    return (
        <div className={'flex flex-col h-full'}>
            <HeaderBar />
            <DocumentEditor />
            <ControlPanel />
        </div>
    )

}